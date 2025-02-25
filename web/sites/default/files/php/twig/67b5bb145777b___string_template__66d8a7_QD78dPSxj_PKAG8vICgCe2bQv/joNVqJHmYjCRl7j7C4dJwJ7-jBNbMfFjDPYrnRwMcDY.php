<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* __string_template__66d8a791218438cb21d8fdb58e51c4f2 */
class __TwigTemplate_e898709d55d23a3bc2a5f37928ece96e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield ".coh-image {
  display: block;
  width: 100%;
  max-width: 100%;
  height: auto;
  /*fix Edge for lazy-loading https://github.com/verlok/lazyload/issues/152 */
}
.coh-image[data-src], .coh-image[data-srcset] {
  min-height: 1px;
}
.coh-image-xs {
  display: block;
  width: auto;
  max-width: 100%;
  height: auto;
}
.coh-image-responsive-xs {
  display: block;
  width: 100%;
  max-width: 100%;
  height: auto;
  float: none;
  margin-left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
.coh-image-float-left-xs {
  float: left;
  margin-left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
.coh-image-float-right-xs {
  float: right;
  margin-left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
.coh-image-align-left-xs {
  float: none;
  margin-left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
.coh-image-align-centre-xs {
  float: none;
  margin-left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
}
.coh-image-align-right-xs {
  float: none;
  margin-left: 100%;
  -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
          transform: translateX(-100%);
}
@media (min-width: 565px) {
  .coh-image-ps {
    display: block;
    width: auto;
    max-width: 100%;
    height: auto;
  }
  .coh-image-responsive-ps {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-left-ps {
    float: left;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-right-ps {
    float: right;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-left-ps {
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-centre-ps {
    float: none;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  .coh-image-align-right-ps {
    float: none;
    margin-left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
@media (min-width: 768px) {
  .coh-image-sm {
    display: block;
    width: auto;
    max-width: 100%;
    height: auto;
  }
  .coh-image-responsive-sm {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-left-sm {
    float: left;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-right-sm {
    float: right;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-left-sm {
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-centre-sm {
    float: none;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  .coh-image-align-right-sm {
    float: none;
    margin-left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
@media (min-width: 1024px) {
  .coh-image-md {
    display: block;
    width: auto;
    max-width: 100%;
    height: auto;
  }
  .coh-image-responsive-md {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-left-md {
    float: left;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-right-md {
    float: right;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-left-md {
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-centre-md {
    float: none;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  .coh-image-align-right-md {
    float: none;
    margin-left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
@media (min-width: 1170px) {
  .coh-image-lg {
    display: block;
    width: auto;
    max-width: 100%;
    height: auto;
  }
  .coh-image-responsive-lg {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-left-lg {
    float: left;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-right-lg {
    float: right;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-left-lg {
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-centre-lg {
    float: none;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  .coh-image-align-right-lg {
    float: none;
    margin-left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
@media (min-width: 1400px) {
  .coh-image-xl {
    display: block;
    width: auto;
    max-width: 100%;
    height: auto;
  }
  .coh-image-responsive-xl {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-left-xl {
    float: left;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-float-right-xl {
    float: right;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-left-xl {
    float: none;
    margin-left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  .coh-image-align-centre-xl {
    float: none;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  .coh-image-align-right-xl {
    float: none;
    margin-left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__66d8a791218438cb21d8fdb58e51c4f2";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__66d8a791218438cb21d8fdb58e51c4f2", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
