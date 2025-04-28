<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::insert([
            [
                'question_id' => 1,
                'body' => 'Uma banana com café deve ser bom.',
                'user_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 1,
                'body' => 'Tente comer ovos mexidos e uma fatia de pão integral!',
                'user_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 2,
                'body' => 'Comece por Kotlin, é mais moderno e oficial para Android.',
                'user_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 2,
                'body' => 'Java ainda é muito usado em grandes projetos, mas Kotlin é mais produtivo.',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 3,
                'body' => 'Pomodoro é uma ótima técnica para melhorar o foco.',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 3,
                'body' => 'Desligue as notificações do celular e estude em blocos de tempo.',
                'user_id' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 4,
                'body' => 'Treinar pela manhã é ótimo para acelerar o metabolismo.',
                'user_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 4,
                'body' => 'Treine no horário que você se sente mais disposto, o melhor horário é o que você consegue manter.',
                'user_id' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 5,
                'body' => 'React tem mais demanda no mercado, recomendo começar por ele.',
                'user_id' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 5,
                'body' => 'Angular é mais completo para projetos grandes, mas React é mais fácil de aprender.',
                'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 6,
                'body' => 'Planeje suas compras e faça lista antes de ir ao mercado.',
                'user_id' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 6,
                'body' => 'Prefira comprar produtos de marcas próprias do mercado, geralmente são mais baratos.',
                'user_id' => 17,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 7,
                'body' => 'Comece com caminhadas curtas e vá aumentando a distância aos poucos.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 7,
                'body' => 'Use um tênis adequado e respeite seu ritmo!',
                'user_id' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 8,
                'body' => 'Eloquent é ótimo para consultas rápidas e claras, mas Query Builder dá mais controle em consultas complexas.',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 8,
                'body' => 'Depende do projeto. Se for algo muito complexo, prefiro Query Builder!',
                'user_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 9,
                'body' => 'Vale a pena sim, TypeScript ajuda a evitar muitos erros bobos!',
                'user_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 9,
                'body' => 'TypeScript deixa o código mais organizado e escalável.',
                'user_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 10,
                'body' => 'Comece com hábitos pequenos e vá aumentando gradativamente.',
                'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'question_id' => 10,
                'body' => 'Use aplicativos para acompanhar seus novos hábitos!',
                'user_id' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
