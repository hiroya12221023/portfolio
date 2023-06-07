<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;
use App\Models\Question;

class AnswersTableSeeder extends Seeder
{
    public function run()
    {
        // 問題文と回答の作成
        $question1 = new Question();
        $question1->question = '今日は何曜日ですか?';
        $question1->save();

        $question2 = new Question();
        $question2->question = '今の元号は?';
        $question2->save();

        // 回答の作成
        $answer1 = new Answer();
        $answer1->answer = '月曜日';
        $answer1->is_correct = true;
        $answer1->question()->associate($question1);
        $answer1->save();

        $answer2 = new Answer();
        $answer2->answer = '火曜日';
        $answer2->is_correct = false;
        $answer2->question()->associate($question1);
        $answer2->save();

        $answer3 = new Answer();
        $answer3->answer = '平成';
        $answer3->is_correct = false;
        $answer3->question()->associate($question2);
        $answer3->save();

        $answer4 = new Answer();
        $answer4->answer = '昭和';
        $answer4->is_correct = false;
        $answer4->question()->associate($question2);
        $answer4->save();

        // その他のシーディング処理...

        $this->command->info('Database seeded!');
    }
}