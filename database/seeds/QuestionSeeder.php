<?php



use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionExam;
use App\Models\Quizze;
use Illuminate\Database\Seeder;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizExam = Quizze::inRandomOrder()->first();
        $quizExams = [
            [
                'title' => 'What is 2 + 2?',
                
                'level' => 'easy',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => '4', 'is_correct' => true],
                    ['answer' => '3', 'is_correct' => false],
                    ['answer' => '5', 'is_correct' => false],
                    ['answer' => '6', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the square root of 16?',
                
                'level' => 'easy',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => '4', 'is_correct' => true],
                    ['answer' => '5', 'is_correct' => false],
                    ['answer' => '6', 'is_correct' => false],
                    ['answer' => '3', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is 7 x 8?',
                
                'level' => 'medium',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => '56', 'is_correct' => true],
                    ['answer' => '48', 'is_correct' => false],
                    ['answer' => '64', 'is_correct' => false],
                    ['answer' => '54', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the value of π (pi) to two decimal places?',
                
                'level' => 'medium',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => '3.14', 'is_correct' => true],
                    ['answer' => '3.15', 'is_correct' => false],
                    ['answer' => '3.13', 'is_correct' => false],
                    ['answer' => '3.12', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the derivative of x²?',
                
                'level' => 'hard',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => '2x', 'is_correct' => true],
                    ['answer' => 'x', 'is_correct' => false],
                    ['answer' => '2', 'is_correct' => false],
                    ['answer' => 'x²', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the sum of the interior angles of a triangle?',
                
                'level' => 'medium',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => '180 degrees', 'is_correct' => true],
                    ['answer' => '360 degrees', 'is_correct' => false],
                    ['answer' => '90 degrees', 'is_correct' => false],
                    ['answer' => '270 degrees', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the value of 5 factorial (5!)?',
                
                'level' => 'hard',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => '120', 'is_correct' => true],
                    ['answer' => '24', 'is_correct' => false],
                    ['answer' => '60', 'is_correct' => false],
                    ['answer' => '125', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the equation of the Pythagorean theorem?',
                
                'level' => 'medium',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'a² + b² = c²', 'is_correct' => true],
                    ['answer' => 'a² - b² = c²', 'is_correct' => false],
                    ['answer' => 'a² + b = c²', 'is_correct' => false],
                    ['answer' => 'a² + b² = c', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the area of a circle with radius r?',
                
                'level' => 'medium',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'πr²', 'is_correct' => true],
                    ['answer' => '2πr', 'is_correct' => false],
                    ['answer' => 'πd', 'is_correct' => false],
                    ['answer' => '2r²', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the integral of 2x?',
                
                'level' => 'hard',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'x² + C', 'is_correct' => true],
                    ['answer' => '2x²', 'is_correct' => false],
                    ['answer' => 'x²', 'is_correct' => false],
                    ['answer' => 'x + C', 'is_correct' => false],
                ],
            ],
        
            [
                'title' => 'What is the capital of Japan?',
                
                'level' => 'easy',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'Tokyo', 'is_correct' => true],
                    ['answer' => 'Kyoto', 'is_correct' => false],
                    ['answer' => 'Osaka', 'is_correct' => false],
                    ['answer' => 'Nagoya', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'Which element has the chemical symbol "O"?',
                
                'level' => 'medium',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'Oxygen', 'is_correct' => true],
                    ['answer' => 'Osmium', 'is_correct' => false],
                    ['answer' => 'Oganesson', 'is_correct' => false],
                    ['answer' => 'Oxygenium', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'Who painted the Mona Lisa?',
                
                'level' => 'easy',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'Leonardo da Vinci', 'is_correct' => true],
                    ['answer' => 'Vincent van Gogh', 'is_correct' => false],
                    ['answer' => 'Pablo Picasso', 'is_correct' => false],
                    ['answer' => 'Claude Monet', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the largest mammal?',
                
                'level' => 'medium',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'Blue whale', 'is_correct' => true],
                    ['answer' => 'Elephant', 'is_correct' => false],
                    ['answer' => 'Giraffe', 'is_correct' => false],
                    ['answer' => 'Hippopotamus', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the chemical symbol for gold?',
                
                'level' => 'easy',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'Au', 'is_correct' => true],
                    ['answer' => 'Ag', 'is_correct' => false],
                    ['answer' => 'Pb', 'is_correct' => false],
                    ['answer' => 'Pt', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the fastest land animal?',
                
                'level' => 'medium',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'Cheetah', 'is_correct' => true],
                    ['answer' => 'Lion', 'is_correct' => false],
                    ['answer' => 'Tiger', 'is_correct' => false],
                    ['answer' => 'Leopard', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the hardest natural substance on Earth?',
                
                'level' => 'hard',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'Diamond', 'is_correct' => true],
                    ['answer' => 'Gold', 'is_correct' => false],
                    ['answer' => 'Iron', 'is_correct' => false],
                    ['answer' => 'Platinum', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the most abundant gas in the Earth’s atmosphere?',
                
                'level' => 'medium',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'Nitrogen', 'is_correct' => true],
                    ['answer' => 'Oxygen', 'is_correct' => false],
                    ['answer' => 'Carbon Dioxide', 'is_correct' => false],
                    ['answer' => 'Argon', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'What is the currency of Japan?',
                
                'level' => 'easy',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'Yen', 'is_correct' => true],
                    ['answer' => 'Won', 'is_correct' => false],
                    ['answer' => 'Yuan', 'is_correct' => false],
                    ['answer' => 'Dollar', 'is_correct' => false],
                ],
            ],
            [
                'title' => 'Who developed the theory of relativity?',
                
                'level' => 'hard',
                'subject_id' => $quizExam->subject_id,
                'grade_id' => $quizExam->grade_id,
                'teacher_id' => $quizExam->teacher_id,
                'answers' => [
                    ['answer' => 'Albert Einstein', 'is_correct' => true],
                    ['answer' => 'Isaac Newton', 'is_correct' => false],
                    ['answer' => 'Galileo Galilei', 'is_correct' => false],
                    ['answer' => 'Nikola Tesla', 'is_correct' => false],
                ],
            ],
        ];
        

        foreach ($quizExams as $questionData) {
            $question = Question::create([
                'title' => $questionData['title'],
                'level' => $questionData['level'],
                'subject_id' => $questionData['subject_id'],
                'grade_id' => $questionData['grade_id'],
                'teacher_id' => $questionData['teacher_id'],
            ]);

            foreach ($questionData['answers'] as $answerData) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer' => $answerData['answer'],
                    'is_correct' => $answerData['is_correct'],
                ]);
            }

            QuestionExam::create([
                'exam_id' => $quizExam->id,
                'question_id' => $question->id,
            ]);
        }
    }
}





