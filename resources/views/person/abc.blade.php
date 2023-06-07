<?php

// 他のコード...

$answer = new Answer();
$answer->question_id = $questionId;
$answer->answer = $answerText;
if ($answer->save()) {
    echo "レコードが正常に保存されました";
} else {
    echo "保存中にエラーが発生しました：" . $answer->getError();
}