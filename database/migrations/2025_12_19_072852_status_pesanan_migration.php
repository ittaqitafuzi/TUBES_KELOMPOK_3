public function up()
{
    Schema::create('status_pesanan', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('pesanan_id');
        $table->enum('status', ['diproses', 'dikirim', 'selesai']);
        $table->timestamps();

        $table->foreign('pesanan_id')
              ->references('id')->on('pesanan')
              ->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('status_pesanan');
}
