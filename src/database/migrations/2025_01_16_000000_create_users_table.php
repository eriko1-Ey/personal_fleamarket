<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //ユーザー名
            $table->string('email')->unique(); //メールアドレス（同じものは不可）
            $table->timestamp('email_verified_at')->nullable(); //メール認証
            $table->string('password'); //パスワード
            $table->string('profile_image')->nullable(); // プロフィール画像
            $table->string('post_code', 8)->nullable(); // 郵便番号
            $table->text('address')->nullable(); // 住所
            $table->string('building')->nullable(); // 建物名
            $table->rememberToken(); //ログイン状態を保持するトークン
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
