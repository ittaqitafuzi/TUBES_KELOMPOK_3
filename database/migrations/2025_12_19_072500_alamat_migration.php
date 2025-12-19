public function up()
{
    Schema::create('alamat', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('customer_id');
        $table->string('nama_penerima', 100);
        $table->string('no_telepon', 20);
        $table->string('provinsi', 100);
        $table->string('kabupaten', 100);
        $table->string('kecamatan', 100);
        $table->text('alamat_lengkap');
        $table->timestamps();

        $table->foreign('customer_id')
              ->references('id')->on('customers')
              ->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('alamat');
}
