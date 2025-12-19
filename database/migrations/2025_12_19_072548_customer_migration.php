public function up()
{
    Schema::create('customers', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nama', 100);
        $table->string('email', 100)->unique();
        $table->string('no_hp', 20);
        $table->string('password', 255);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('customers');
}
