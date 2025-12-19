public function up()
{
    Schema::create('pesanan', function (Blueprint $table) {
        $table->increments('id');
        $table->string('kode_pesanan', 50)->unique();
        $table->integer('customer_id');
        $table->integer('alamat_id');
        $table->decimal('subtotal', 10, 2);
        $table->decimal('biaya_admin', 10, 2)->default(1000);
        $table->decimal('total', 10, 2);
        $table->timestamps();

        $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        $table->foreign('alamat_id')->references('id')->on('alamat')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('pesanan');
}
