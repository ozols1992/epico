<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('vacancy', 36);
            $table->string('type');
            $table->integer('consultant_id')->unsigned();
            $table->text('message');
            $table->integer('author_id')->unsigned();
            
            $table->foreign('author_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            
            $table->foreign('consultant_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
        
        //DB::statement('ALTER TABLE messages ADD CONSTRAINT chk_type (type in ("Application","Reply"));');
        
        $this->generateTestData();
    }
    
    
    protected function generateTestData(){
        
        DB::table('users')->insert(array('id' => '99', 'available_or_not' => true, 'phone_nr' => '12345678', 'city' => 'Kolding', 'country' => 'Denmark', 'type' => 'freelance', 'title' => 'Title', 'description' => 'Lorem ipsum dolor sit amet', 'name' => 'TestUser1', 'email' => 'test1@mail.com', 'password' => '1234'));
        DB::table('users')->insert(array('id' => '88', 'available_or_not' => true, 'phone_nr' => '12345678', 'city' => 'Kolding', 'country' => 'Denmark', 'type' => 'freelance', 'title' => 'Title', 'description' => 'Lorem ipsum dolor sit amet',  'name' => 'TestUser2', 'email' => 'test2@mail.com', 'password' => '1234'));
        DB::table('users')->insert(array('id' => '77', 'available_or_not' => true, 'phone_nr' => '12345678', 'city' => 'Kolding', 'country' => 'Denmark', 'type' => 'freelance', 'title' => 'Title', 'description' => 'Lorem ipsum dolor sit amet',  'name' => 'TestUser3', 'email' => 'test3@mail.com', 'password' => '1234'));

        DB::table('users')->insert(array('id' => '66', 'available_or_not' => false, 'phone_nr' => '12345678', 'city' => 'Kolding', 'country' => 'Denmark', 'type' => 'admin', 'title' => 'Title', 'description' => 'Lorem ipsum dolor sit amet',  'name' => 'TestAdmin1', 'email' => 'test4@mail.com', 'password' => '1234'));
        DB::table('users')->insert(array('id' => '55', 'available_or_not' => false, 'phone_nr' => '12345678', 'city' => 'Kolding', 'country' => 'Denmark', 'type' => 'admin', 'title' => 'Title', 'description' => 'Lorem ipsum dolor sit amet',  'name' => 'TestAdmin2', 'email' => 'test5@mail.com', 'password' => '1234'));

        
        DB::table('messages')->insert(
                array('vacancy' => 'X', 'type' => 'Application', 'vacancy' => '4f9803f8-a2c3-e711-8125-70106faac681', 'consultant_id' => '99', 
                        'message' => 'I want the job!', 'author_id' => '99', 'created_at' => now())
                );
        
        DB::table('messages')->insert(
                array('vacancy' => 'X', 'type' => 'Application', 'vacancy' => '4f9803f8-a2c3-e711-8125-70106faac681', 'consultant_id' => '77', 
                        'message' => 'Hello! :D', 'author_id' => '77', 'created_at' => now())
                );
        
        DB::table('messages')->insert(
                array('vacancy' => 'X', 'type' => 'Reply', 'vacancy' => '4f9803f8-a2c3-e711-8125-70106faac681', 'consultant_id' => '99', 
                        'message' => 'Its yours! :D', 'author_id' => '66', 'created_at' => now())
                );
        
        DB::table('messages')->insert(
                array('vacancy' => 'X', 'type' => 'Reply', 'vacancy' => '4f9803f8-a2c3-e711-8125-70106faac681', 'consultant_id' => '77', 
                        'message' => 'Hi! <3', 'author_id' => '55', 'created_at' => now())
                );
        
        DB::table('messages')->insert(
                array('vacancy' => 'X', 'type' => 'Reply', 'vacancy' => '4f9803f8-a2c3-e711-8125-70106faac681', 'consultant_id' => '77', 
                        'message' => 'What’s going on here?', 'author_id' => '66', 'created_at' => now())
                );
        
        DB::table('messages')->insert(
                array('vacancy' => 'X', 'type' => 'Reply', 'vacancy' => '4f9803f8-a2c3-e711-8125-70106faac681', 'consultant_id' => '77', 
                        'message' => 'I’m not supposed to be here ;D', 'author_id' => '88', 'created_at' => now())
                );
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
        Schema::dropIfExists('messageTypes');
    }
}
