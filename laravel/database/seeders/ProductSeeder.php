<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $produtos = [
            [
                'nome' => 'Teclado Mecânico RGB',
                'descricao' => 'Teclado switch blue com retroiluminação personalizada.',
                'preco' => 299.90,
                'categoria' => 'Periféricos',
            ],
            [
                'nome' => 'Mouse Gamer 12000 DPI',
                'descricao' => 'Mouse ergonômico com 6 botões programáveis.',
                'preco' => 159.50,
                'categoria' => 'Periféricos',
            ],
            [
                'nome' => 'Monitor 24" Full HD',
                'descricao' => 'Monitor IPS com taxa de atualização de 144Hz.',
                'preco' => 1250.00,
                'categoria' => 'Monitores',
            ],
            [
                'nome' => 'Headset Wireless 7.1',
                'descricao' => 'Som surround com microfone cancelador de ruído.',
                'preco' => 450.00,
                'categoria' => 'Áudio',
            ],
            [
                'nome' => 'Cadeira Gamer Ergonômica',
                'descricao' => 'Reclinável com apoio para braços 4D e almofadas.',
                'preco' => 1890.00,
                'categoria' => 'Móveis',
            ],
            [
                'nome' => 'Webcam 4K Ultra HD',
                'descricao' => 'Ideal para streaming com foco automático.',
                'preco' => 580.00,
                'categoria' => 'Acessórios',
            ],
            [
                'nome' => 'SSD NVMe 1TB',
                'descricao' => 'Velocidade de leitura de até 3500MB/s.',
                'preco' => 320.00,
                'categoria' => 'Hardware',
            ],
            [
                'nome' => 'Memória RAM 16GB DDR4',
                'descricao' => 'Módulo único de 3200MHz com dissipador.',
                'preco' => 275.00,
                'categoria' => 'Hardware',
            ],
            [
                'nome' => 'Placa de Vídeo RTX 4060',
                'descricao' => 'Tecnologia Ray Tracing e 8GB GDDR6.',
                'preco' => 2400.00,
                'categoria' => 'Hardware',
            ],
            [
                'nome' => 'Microfone Condensador USB',
                'descricao' => 'Padrão polar cardioide para gravação de podcasts.',
                'preco' => 399.00,
                'categoria' => 'Áudio',
            ],
        ];

        foreach ($produtos as $produto) {
            $produto['created_at'] = now();
            $produto['updated_at'] = now();
            DB::table('produtos')->insert($produto);
        }
    }
}
