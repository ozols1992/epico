<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\vacancy;
use App\message;

class applicationController extends Controller{
    
    public function createReply($vacancy, $msg, $consultantId = null){
        return $this->createMessage($vacancy, $msg, 'reply', $consultantId);
    }
    
    public function createApplication($vacancy, $msg, $consultantId = null){
       return $this->createMessage($vacancy, $msg, 'application', $consultantId);
    }
    
    public function createInvite($vacancy, $msg, $consultantId = null){
        //return $this->createMessage($vacancy, $msg, 'invite', $consultantId);
    }

    private function createMessage($vacancy, $msg, $type, $consultantId = null){
        $user = User::findOrFail(99); //Auth::user();
        if($consultantId === null){
            $consultantId = $user->id;
        }
        
        //OR User === admin
        if($user->id == $consultantId || TRUE){
            try{
                $msg = $user->messages()->create([
                    'message' =>  $msg,
                    'vacancy' => $vacancy,
                    'type' => $type,
                    'consultant_id' => $consultantId,
                    'author_id' => $user->id
                ]);
                
                $msg->author = $user;
                return $msg;
                
            }
            catch (Exception $e) {
                
            }
        }
        return FALSE;
    }
    
    public function getFormView($vacancyId){
        $user = User::findOrFail(99); //Auth::user();
        $vacancy = vacancy::get($vacancyId);
        //User == admin
        if(!false && !$user->hasApplied($vacancy)){
            return view('applications/application_form', ['vacancy' => $vacancy, 'User' => $user]);
        }
        
        //User == admin
        $message = (false) ? "You already work for us" : "You have already applied";
        return view('applications/application_NotAllowed', ["message" => $message]);
    }
    
    public function getApplicationAndReplies($vacancyId, $consultantId = null){
        $user = User::findOrFail(99);
        $consultantId = $consultantId === null ? $user->id : $consultantId;
        
        //User === admin
        if($user->id == $consultantId || false){
            return message::getmessages($consultantId, $vacancyId);
        } 
    }
}
