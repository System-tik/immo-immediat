<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('salon')->nullable();
            $table->integer('chambre')->nullable();
            $table->boolean('etat')->default(false);
            $table->boolean('equipe')->default(false);
            $table->string('adresse');
            $table->string('prix')->default('A discuter');
            $table->string('devise');
            $table->boolean('valide')->default(false);
            $table->foreignId('client_id')->nullable()->constrained('clients');
            $table->string('ville');
            $table->json('caract_bien')->nullable();
            $table->foreignId('type_annonce_id')->constrained('type_annonces');
            $table->foreignId('type_bien_id')->constrained('type_biens');
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
        Schema::dropIfExists('biens');
    }
}
