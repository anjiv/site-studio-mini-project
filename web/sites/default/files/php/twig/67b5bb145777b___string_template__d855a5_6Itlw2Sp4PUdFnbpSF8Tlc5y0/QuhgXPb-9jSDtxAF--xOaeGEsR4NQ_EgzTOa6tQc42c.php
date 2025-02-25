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

/* __string_template__d855a516cb97a494d6c598bf26819ced */
class __TwigTemplate_bf41bb3f1dcfb77dc6093f5f049e3fc3 extends Template
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
        yield ".coh-container {
  display: block;
}
.coh-container:before, .coh-container:after {
  clear: both;
  content: \" \";
  display: table;
}
.coh-container-boxed {
  max-width: none;
  margin-left: 1.25rem;
  margin-right: 1.25rem;
}
@media (min-width: 565px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 1.875rem;
    margin-right: 1.875rem;
  }
}
@media (min-width: 768px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 1.5625rem;
    margin-right: 1.5625rem;
  }
}
@media (min-width: 1024px) {
  .coh-container-boxed {
    margin: 0 auto;
    max-width: 53.375rem;
  }
}
@media (min-width: 1170px) {
  .coh-container-boxed {
    margin: 0 auto;
    max-width: 53.125rem;
  }
}
@media (min-width: 1400px) {
  .coh-container-boxed {
    margin: 0 auto;
    max-width: 53.125rem;
  }
}
.coh-container-boxed .coh-container-boxed {
  margin-right: auto;
  margin-left: auto;
}
.dx8-aov {
  visibility: hidden;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__d855a516cb97a494d6c598bf26819ced";
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
        return new Source("", "__string_template__d855a516cb97a494d6c598bf26819ced", "");
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
