<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\vacancy;
use App\message;
use Auth;
use App\Events\messagePosted;

class applicationController extends Controller{
    
    public function createReply($vacancy, $msg, $consultantId = null){
        return $this->createMessage($vacancy, $msg, 'Reply', $consultantId);
    }
    
    public function createApplication($vacancyId, $msg, $consultantId = null){
        $user = Auth::user();
        return $user->hasApplied($vacancyId) ? null 
               : $this->createMessage($vacancyId, $msg, 'Application', $consultantId);
    }

    private function createMessage($vacancyId, $msg, $type, $consultantId = null){
        $user = Auth::user();
        if($consultantId === null){
            $consultantId = $user->id;
        }
        
        //OR User === admin
        if($user->id == $consultantId || TRUE){
            try{
                $msg = $user->messages()->create([
                    'message' =>  $msg,
                    'vacancy' => $vacancyId,
                    'type' => $type,
                    'consultant_id' => $consultantId,
                    'author_id' => $user->id
                ]);
                
                $msg->author = $user;
                event(new messagePosted($msg, $vacancyId, $consultantId));
                
                return $msg;
                
            }
            catch (Exception $e) {
                
            }
        }
        return FALSE;
    }
    
    public function getFormView($vacancyId){
        $user = Auth::user();
        $vacancy = vacancy::get($vacancyId);
        //false aka. User == admin
        if(!false && !$user->hasApplied($vacancy->Id)){
            return view('applications/application_form', ['vacancy' => $vacancy, 'User' => $user]);
        }
        
        //false aka. User == admin
        $message = (false) ? "You already work for us" : "You have already applied";
        return view('applications/application_NotAllowed', ["message" => $message]);
    }
    
    public function getApplicationAndReplies($vacancyId, $consultantId = null){
        $user = Auth::user();
        $consultantId = $consultantId === null ? $user->id : $consultantId;
        
        //User === admin
        if($user->id == $consultantId || false){
            return message::getmessages($consultantId, $vacancyId);
        } 
    }
}
