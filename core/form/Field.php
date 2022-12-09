<?php


namespace app\core\form;


use app\core\Model;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public function __construct(
        public Model $model,
        public string $attribute
    )
    {
    }

    public function __toString(): string
    {
        return sprintf('<div class="mb-3">
                                    <label for="%s" class="form-label">
                                    %s
                                    </label>
                                    <input type="%s"
                                           class="form-control%s"
                                           id="%s"
                                           value="%s"
                                           name="%s">
                                     <div class="invalid-feedback">
                                      %s
                                     </div>  
                                </div>',
            $this->attribute,
            ucfirst($this->attribute),
            $this->typeField($this->attribute),
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
            $this->attribute,
            $this->model->getFirstError($this->attribute),
        );
    }

    protected function typeField(string $attribute): string
    {
        $type = 'text';

        if(
            $attribute === 'password' ||
            $attribute === 'confirmPassword'
        ) {
            $type = 'password';
        } else if ($attribute === 'email') {
            $type = 'email';
        }

        return $type;
    }
}