<?php


use Phinx\Seed\AbstractSeed;

class ProdutosSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            ["id" => 1,"nome" => "HD 20 gigas","preco" => 29.99,"descricao" => "HD muito bom da marca mega-HD"],
            ["id" => 2,"nome" => "TV","preco" => 89.99,"descricao" => "TV muito boa da marca Sony"]
        ];

        $produtos = $this->table('produtos');
        $produtos->insert($data)
                 ->save();

    }
}
