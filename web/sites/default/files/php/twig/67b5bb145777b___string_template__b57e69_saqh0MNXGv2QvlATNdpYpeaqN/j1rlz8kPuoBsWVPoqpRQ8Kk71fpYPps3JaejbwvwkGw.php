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

/* __string_template__b57e6965d5c05056a26e79cbd6eb4f3d */
class __TwigTemplate_38f500d2ea724deef777c36efe882e60 extends Template
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
        // line 1
        yield "@media (min-width: 1400px) {
  .coh-preview {
    background-color: rgb(230, 240, 231);
  }
}
@media (min-width: 1400px) {
  .coh-preview .footer-menu a {
    color: rgb(119, 121, 117);
  }
}
@media (min-width: 1400px) {
  .coh-preview .footer-menu a:hover {
    color: rgb(38, 163, 221);
  }
}
.coh-preview .social-links a {
  font-size: 24px;
}
@media (min-width: 1400px) {
  .coh-preview .social-links a {
    color: rgb(119, 121, 117);
  }
}
@media (min-width: 1400px) {
  .coh-preview .social-links a:hover {
    color: rgb(112, 195, 233);
  }
}
.coh-preview .secondary-row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
@media (min-width: 1400px) {
  .coh-preview .secondary-row {
    background-color: rgb(230, 240, 231);
    color: rgb(0, 0, 0);
  }
}
.coh-preview .secondary-row .copyright-text {
  font-family: 'Montserrat', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(119, 121, 117);
  font-size: 16px;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__b57e6965d5c05056a26e79cbd6eb4f3d";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__b57e6965d5c05056a26e79cbd6eb4f3d", "");
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
