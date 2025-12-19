public function up()
{
    Schema::create('produk', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nama_produk', 100);
        $table->text('deskripsi')->nullable();
        $table->decimal('harga', 10, 2);
        $table->integer('berat');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('produk');
}

