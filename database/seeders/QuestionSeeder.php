<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::insert([
            [
                'title' => 'O que comer de saudável de manhã?',
                'body' => 'Nunca fui de tomar café de manhã então tenho dúvidas de como posso tirar maior proveito disso, quais alimentos são recomendados?',
                'user_id' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Java ou Kotlin?',
                'body' => 'Queria saber qual seria a melhor linguagem para iniciar no desenvolvimento android.',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Como melhorar a concentração nos estudos?',
                'body' => 'Tenho dificuldade em manter o foco por longos períodos. Alguém tem dicas ou métodos que ajudam a melhorar a concentração?',
                'user_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Qual melhor horário para treinar?',
                'body' => 'De manhã, à tarde ou à noite? Qual o horário que traz mais benefícios para a prática de exercícios físicos?',
                'user_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'React ou Angular em 2025?',
                'body' => 'Estou começando no front-end e queria saber qual dessas bibliotecas/frameworks seria melhor para investir agora.',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Dicas para economizar no mercado?',
                'body' => 'Os preços estão muito altos! Quais estratégias vocês usam para economizar nas compras de supermercado?',
                'user_id' => 17,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Como começar a correr?',
                'body' => 'Quero começar a correr para melhorar o condicionamento, mas não sei por onde começar. Treinos, frequência, dicas?',
                'user_id' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Laravel: Eloquent ou Query Builder?',
                'body' => 'Qual das duas abordagens vocês preferem usar no Laravel para consultas mais complexas? Vantagens e desvantagens?',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Vale a pena aprender TypeScript?',
                'body' => 'Já sei JavaScript, mas vejo muita gente falando sobre TypeScript. Realmente compensa o esforço de aprender?',
                'user_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Como criar hábitos saudáveis?',
                'body' => 'Estou tentando mudar meu estilo de vida, mas tenho dificuldade em manter novos hábitos. Quais dicas podem ajudar a criar e manter hábitos saudáveis?',
                'user_id' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
