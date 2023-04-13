<?php 

    namespace Src\Admin\CodeGenerator;

    class GenereteFormElementFileClass
    {
        private string $view;

        public function __construct(
            private string $fileName, 
            private array $params,
            private ?string $optionTagName = null, //tag select 
            private ?string $optionParams = null, //tag select 
        )
        {
            $data = <<<FILE
            <?php
                namespace {$params['namespace']}
                
                class InputForm
                {
                    private string \$view = "";

                    public function __construct(
                        private string \$name,
                        private string \$type,
                        private array \$params,
                        ){}
                }
            FILE; 
            file_put_contents($fileName,
                mixed $data,
                int $flags = 0,
                ?resource $context = null
            ): int|false 
        }
        
        
    }
