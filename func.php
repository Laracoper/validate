<?

use Valitron\Validator;

$data = [
    'required' => ['name', 'email', 'city', 'age'],
    'integer' => ['age'],
    'email' => ['email']
];
$labels = [
    'name' => 'имя',
    'city'=>'город',
    'email'=>'E-MAIL',
    'age'=>'возраст'
];

if(!empty($_POST)){
    Valitron\Validator::lang('ru');
    $v = new Validator($_POST);
    // $v->rule('required',['name','city','age','email']);
    // $v->rule('integer','age');
    // $v->rule('email','email');
    $v->rules($data);
    $v->labels($labels);

    if ($v->validate()) {
        $_SESSION['success'] = 'данные отправлены';
    } else {
        $errors = '<ol>';
        foreach ($v->errors() as $error) {
            foreach ($error as $item) {
                $errors .= "<li>{$item}</li>";
            }
        }
        $errors .= '</ol>';
        $_SESSION['errors'] = $errors;
    }
    
}



