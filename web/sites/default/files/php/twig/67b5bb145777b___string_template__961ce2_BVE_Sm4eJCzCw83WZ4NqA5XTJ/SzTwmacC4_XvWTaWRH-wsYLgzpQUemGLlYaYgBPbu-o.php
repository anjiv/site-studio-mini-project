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

/* __string_template__961ce2cab54ce09b21bb6e4c05234dd6 */
class __TwigTemplate_954597587da95668749b31a98ebbefe0 extends Template
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
.coh-preview .footer-menu a {
  padding-left: 0;
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
.coh-preview .footer-menu li:first-child {
  padding-left: 0;
}
.coh-preview .social-links a {
  font-size: 24px;
  margin-right: 5px;
  margin-left: 5px;
}
@media (min-width: 1400px) {
  .coh-preview .social-links a {
    color: rgb(119, 121, 117);
  }
}
@media (min-width: 1400px) {
  .coh-preview .social-links a:hover {
    color: rgb(119, 121, 117);
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
  margin-top: auto;
  margin-right: auto;
  margin-bottom: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .coh-preview .secondary-row {
    max-width: 43.75rem;
  }
}
@media (min-width: 1170px) {
  .coh-preview .secondary-row {
    max-width: 81.25rem;
  }
}
@media (min-width: 1400px) {
  .coh-preview .secondary-row {
    background-color: rgb(230, 240, 231);
    color: rgb(0, 0, 0);
  }
}
.coh-preview .secondary-row .copyright-text p {
  font-family: 'Montserrat', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 800;
  color: rgb(0, 0, 0);
  font-size: 24px;
}
.coh-preview .secondary-row .footer-contact {
  font-family: 'Montserrat', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-weight: 700;
  color: rgb(119, 121, 117);
  font-size: 18px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-preview .secondary-row .footer-contact span:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f067\";
  font-family: icomoon;
  font-size: 12px;
  padding-right: 8px;
  color: rgb(119, 121, 117);
}
.coh-preview .primary-row {
  margin-top: auto;
  margin-right: auto;
  margin-bottom: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .coh-preview .primary-row {
    max-width: 43.75rem;
  }
}
@media (min-width: 1170px) {
  .coh-preview .primary-row {
    max-width: 81.25rem;
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
        return "__string_template__961ce2cab54ce09b21bb6e4c05234dd6";
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
        return new Source("", "__string_template__961ce2cab54ce09b21bb6e4c05234dd6", "");
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
