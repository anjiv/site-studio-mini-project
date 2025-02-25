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

/* __string_template__563bcdbd8696cea42f9a11ae0c661520 */
class __TwigTemplate_b7bbc8033eb0350865beee17bc77469f extends Template
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
        yield ".mejs__offscreen {
  border: 0;
  clip: rect(1px, 1px, 1px, 1px);
  -webkit-clip-path: inset(50%);
          clip-path: inset(50%);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
  word-wrap: normal;
}
.mejs__container {
  background: #000;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-family: \"Helvetica\", Arial, serif;
  position: relative;
  text-align: left;
  text-indent: 0;
  vertical-align: top;
}
.mejs__container * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.mejs__container video::-webkit-media-controls,
.mejs__container video::-webkit-media-controls-panel,
.mejs__container video::-webkit-media-controls-panel-container,
.mejs__container video::-webkit-media-controls-start-playback-button {
  -webkit-appearance: none;
          appearance: none;
  display: none !important;
}
.mejs__fill-container,
.mejs__fill-container .mejs__container {
  width: 100%;
  height: 100%;
}
.mejs__fill-container {
  background: transparent;
  margin: 0 auto;
  overflow: hidden;
  position: relative;
}
.mejs__container:focus {
  outline: none;
}
.mejs__iframe-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
}
.mejs__embed,
.mejs__embed body {
  background: #000;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  overflow: hidden;
}
.mejs__fullscreen {
  overflow: hidden !important;
}
.mejs__container-fullscreen {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  z-index: 1000;
}
.mejs__container-fullscreen .mejs__mediaelement,
.mejs__container-fullscreen video {
  width: 100% !important;
  height: 100% !important;
}
.mejs__background {
  position: absolute;
  top: 0;
  left: 0;
}
.mejs__mediaelement {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
}
.mejs__poster {
  position: absolute;
  top: 0;
  left: 0;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: 1;
}
:root .mejs__poster-img {
  display: none;
}
.mejs__poster-img {
  border: 0;
  padding: 0;
}
.mejs__overlay {
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
  position: absolute;
  top: 0;
  left: 0;
}
.mejs__layer {
  z-index: 1;
}
.mejs__overlay-play {
  cursor: pointer;
}
.mejs__overlay-button {
  background: url(../../assets/video/mejs-controls.svg) no-repeat;
  background-position: 0 -39px;
  height: 80px;
  width: 80px;
}
.mejs__overlay:hover > .mejs__overlay-button {
  background-position: -80px -39px;
}
.mejs__overlay-loading {
  height: 80px;
  width: 80px;
}
.mejs__overlay-loading-bg-img {
  -webkit-animation: mejs__loading-spinner 1s linear infinite;
          animation: mejs__loading-spinner 1s linear infinite;
  background: transparent url(../../assets/video/mejs-controls.svg) -160px -40px no-repeat;
  display: block;
  width: 80px;
  height: 80px;
  z-index: 1;
}
@-webkit-keyframes mejs__loading-spinner {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes mejs__loading-spinner {
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
.mejs__controls {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 40px;
  list-style-type: none;
  margin: 0;
  padding: 0 10px;
  z-index: 3;
}
.mejs__controls:not([style*=\"display: none\"]) {
  background: rgba(255, 0, 0, 0.7);
  background: -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(0, 0, 0, 0.35)));
  background: -webkit-linear-gradient(transparent, rgba(0, 0, 0, 0.35));
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.35));
}
.mejs__button,
.mejs__time,
.mejs__time-rail {
  font-size: 10px;
  height: 40px;
  line-height: 10px;
  margin: 0;
  width: 32px;
}
.mejs__button > button {
  background: transparent url(../../assets/video/mejs-controls.svg);
  border: 0;
  cursor: pointer;
  display: block;
  font-size: 0;
  height: 20px;
  line-height: 0;
  margin: 10px 6px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  text-decoration: none;
  width: 20px;
}
.mejs__button > button:focus {
  outline: dotted 1px #999;
}
.mejs__container-keyboard-inactive a,
.mejs__container-keyboard-inactive a:focus,
.mejs__container-keyboard-inactive button,
.mejs__container-keyboard-inactive button:focus,
.mejs__container-keyboard-inactive [role=slider],
.mejs__container-keyboard-inactive [role=slider]:focus {
  outline: 0;
}
.mejs__time {
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  color: #fff;
  font-size: 11px;
  font-weight: bold;
  height: 24px;
  overflow: hidden;
  padding: 16px 6px 0;
  text-align: center;
  width: auto;
}
.mejs__play > button {
  background-position: 0 0;
}
.mejs__pause > button {
  background-position: -20px 0;
}
.mejs__replay > button {
  background-position: -160px 0;
}
.mejs__time-rail {
  direction: ltr;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  height: 40px;
  margin: 0 10px;
  padding-top: 10px;
  position: relative;
}
.mejs__time-total,
.mejs__time-buffering,
.mejs__time-loaded,
.mejs__time-current,
.mejs__time-float,
.mejs__time-hovered,
.mejs__time-float-current,
.mejs__time-float-corner,
.mejs__time-marker {
  -webkit-border-radius: 2px;
          border-radius: 2px;
  cursor: pointer;
  display: block;
  height: 10px;
  position: absolute;
}
.mejs__time-total {
  background: rgba(255, 255, 255, 0.3);
  margin: 5px 0 0;
  width: 100%;
}
.mejs__time-buffering {
  -webkit-animation: buffering-stripes 2s linear infinite;
          animation: buffering-stripes 2s linear infinite;
  background: -webkit-linear-gradient(135deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
  background: linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
  background-size: 15px 15px;
  width: 100%;
}
@-webkit-keyframes buffering-stripes {
  from {
    background-position: 0 0;
  }
  to {
    background-position: 30px 0;
  }
}
@keyframes buffering-stripes {
  from {
    background-position: 0 0;
  }
  to {
    background-position: 30px 0;
  }
}
.mejs__time-loaded {
  background: rgba(255, 255, 255, 0.3);
}
.mejs__time-current,
.mejs__time-handle-content {
  background: rgba(255, 255, 255, 0.9);
}
.mejs__time-hovered {
  background: rgba(255, 255, 255, 0.5);
  z-index: 10;
}
.mejs__time-hovered.negative {
  background: rgba(0, 0, 0, 0.2);
}
.mejs__time-current,
.mejs__time-buffering,
.mejs__time-loaded,
.mejs__time-hovered {
  left: 0;
  -webkit-transform: scaleX(0);
      -ms-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: 0 0;
      -ms-transform-origin: 0 0;
          transform-origin: 0 0;
  -webkit-transition: 0.15s ease-in all;
  transition: 0.15s ease-in all;
  width: 100%;
}
.mejs__time-buffering {
  -webkit-transform: scaleX(1);
      -ms-transform: scaleX(1);
          transform: scaleX(1);
}
.mejs__time-hovered {
  -webkit-transition: height 0.1s cubic-bezier(0.44, 0, 1, 1);
  transition: height 0.1s cubic-bezier(0.44, 0, 1, 1);
}
.mejs__time-hovered.no-hover {
  -webkit-transform: scaleX(0) !important;
      -ms-transform: scaleX(0) !important;
          transform: scaleX(0) !important;
}
.mejs__time-handle,
.mejs__time-handle-content {
  border: 4px solid transparent;
  cursor: pointer;
  left: 0;
  position: absolute;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
  z-index: 11;
}
.mejs__time-handle-content {
  border: 4px solid rgba(255, 255, 255, 0.9);
  -webkit-border-radius: 50%;
          border-radius: 50%;
  height: 10px;
  left: -7px;
  top: -4px;
  -webkit-transform: scale(0);
      -ms-transform: scale(0);
          transform: scale(0);
  width: 10px;
}
.mejs__time-rail:hover .mejs__time-handle-content,
.mejs__time-rail .mejs__time-handle-content:focus,
.mejs__time-rail .mejs__time-handle-content:active {
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
}
.mejs__time-float {
  background: #eee;
  border: solid 1px #333;
  bottom: 100%;
  color: #111;
  display: none;
  height: 17px;
  margin-bottom: 9px;
  position: absolute;
  text-align: center;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  width: 36px;
}
.mejs__time-float-current {
  display: block;
  left: 0;
  margin: 2px;
  text-align: center;
  width: 30px;
}
.mejs__time-float-corner {
  border: solid 5px #eee;
  border-color: #eee transparent transparent;
  -webkit-border-radius: 0;
          border-radius: 0;
  display: block;
  height: 0;
  left: 50%;
  line-height: 0;
  position: absolute;
  top: 100%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  width: 0;
}
.mejs__long-video .mejs__time-float {
  margin-left: -23px;
  width: 64px;
}
.mejs__long-video .mejs__time-float-current {
  width: 60px;
}
.mejs__broadcast {
  color: #fff;
  height: 10px;
  position: absolute;
  top: 15px;
  width: 100%;
}
.mejs__fullscreen-button > button {
  background-position: -80px 0;
}
.mejs__unfullscreen > button {
  background-position: -100px 0;
}
.mejs__mute > button {
  background-position: -60px 0;
}
.mejs__unmute > button {
  background-position: -40px 0;
}
.mejs__volume-button {
  position: relative;
}
.mejs__volume-button > .mejs__volume-slider {
  -webkit-backface-visibility: hidden;
  background: rgba(50, 50, 50, 0.7);
  -webkit-border-radius: 0;
          border-radius: 0;
  bottom: 100%;
  display: none;
  height: 115px;
  left: 50%;
  margin: 0;
  position: absolute;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  width: 25px;
  z-index: 1;
}
.mejs__volume-button:hover {
  -webkit-border-radius: 0 0 4px 4px;
          border-radius: 0 0 4px 4px;
}
.mejs__volume-total {
  background: rgba(255, 255, 255, 0.5);
  height: 100px;
  left: 50%;
  margin: 0;
  position: absolute;
  top: 8px;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  width: 2px;
}
.mejs__volume-current {
  background: rgba(255, 255, 255, 0.9);
  left: 0;
  margin: 0;
  position: absolute;
  width: 100%;
}
.mejs__volume-handle {
  background: rgba(255, 255, 255, 0.9);
  -webkit-border-radius: 1px;
          border-radius: 1px;
  cursor: ns-resize;
  height: 6px;
  left: 50%;
  position: absolute;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  width: 16px;
}
.mejs__horizontal-volume-slider {
  display: block;
  height: 36px;
  position: relative;
  vertical-align: middle;
  width: 56px;
}
.mejs__horizontal-volume-total {
  background: rgba(50, 50, 50, 0.8);
  -webkit-border-radius: 2px;
          border-radius: 2px;
  font-size: 1px;
  height: 8px;
  left: 0;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 16px;
  width: 50px;
}
.mejs__horizontal-volume-current {
  background: rgba(255, 255, 255, 0.8);
  -webkit-border-radius: 2px;
          border-radius: 2px;
  font-size: 1px;
  height: 100%;
  left: 0;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.mejs__horizontal-volume-handle {
  display: none;
}
.mejs__captions-button,
.mejs__chapters-button {
  position: relative;
}
.mejs__captions-button > button {
  background-position: -140px 0;
}
.mejs__chapters-button > button {
  background-position: -180px 0;
}
.mejs__captions-button > .mejs__captions-selector,
.mejs__chapters-button > .mejs__chapters-selector {
  background: rgba(50, 50, 50, 0.7);
  border: solid 1px transparent;
  -webkit-border-radius: 0;
          border-radius: 0;
  bottom: 100%;
  margin-right: -43px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  right: 50%;
  visibility: visible;
  width: 86px;
}
.mejs__chapters-button > .mejs__chapters-selector {
  margin-right: -55px;
  width: 110px;
}
.mejs__captions-selector-list,
.mejs__chapters-selector-list {
  list-style-type: none !important;
  margin: 0;
  overflow: hidden;
  padding: 0;
}
.mejs__captions-selector-list-item,
.mejs__chapters-selector-list-item {
  color: #fff;
  cursor: pointer;
  display: block;
  list-style-type: none !important;
  margin: 0 0 6px;
  overflow: hidden;
  padding: 0;
}
.mejs__captions-selector-list-item:hover,
.mejs__chapters-selector-list-item:hover {
  background-color: rgb(200, 200, 200) !important;
  background-color: rgba(255, 255, 255, 0.4) !important;
}
.mejs__captions-selector-input,
.mejs__chapters-selector-input {
  clear: both;
  float: left;
  left: -1000px;
  margin: 3px 3px 0 5px;
  position: absolute;
}
.mejs__captions-selector-label,
.mejs__chapters-selector-label {
  cursor: pointer;
  float: left;
  font-size: 10px;
  line-height: 15px;
  padding: 4px 10px 0;
  width: 100%;
}
.mejs__captions-selected,
.mejs__chapters-selected {
  color: rgb(33, 248, 248);
}
.mejs__captions-translations {
  font-size: 10px;
  margin: 0 0 5px;
}
.mejs__captions-layer {
  bottom: 0;
  color: #fff;
  font-size: 16px;
  left: 0;
  line-height: 20px;
  position: absolute;
  text-align: center;
}
.mejs__captions-layer a {
  color: #fff;
  text-decoration: underline;
}
.mejs__captions-layer[lang=ar] {
  font-size: 20px;
  font-weight: normal;
}
.mejs__captions-position {
  bottom: 15px;
  left: 0;
  position: absolute;
  width: 100%;
}
.mejs__captions-position-hover {
  bottom: 35px;
}
.mejs__captions-text,
.mejs__captions-text * {
  background: rgba(20, 20, 20, 0.5);
  -webkit-box-shadow: 5px 0 0 rgba(20, 20, 20, 0.5), -5px 0 0 rgba(20, 20, 20, 0.5);
          box-shadow: 5px 0 0 rgba(20, 20, 20, 0.5), -5px 0 0 rgba(20, 20, 20, 0.5);
  padding: 0;
  white-space: pre-wrap;
}
.mejs__container.mejs__hide-cues video::-webkit-media-text-track-container {
  display: none;
}
.mejs__overlay-error {
  position: relative;
}
.mejs__overlay-error > img {
  left: 0;
  max-width: 100%;
  position: absolute;
  top: 0;
  z-index: -1;
}
.mejs__cannotplay,
.mejs__cannotplay a {
  color: #fff;
  font-size: 0.8em;
}
.mejs__cannotplay {
  position: relative;
}
.mejs__cannotplay p,
.mejs__cannotplay a {
  display: inline-block;
  padding: 0 15px;
  width: 100%;
}
.coh-video iframe,
.coh-video video {
  width: 100%;
  height: 100%;
}
.coh-video .mejs__container:not(.mejs__container-fullscreen) video {
  -o-object-fit: cover;
     object-fit: cover;
}
.coh-video-hide-controls .mejs__controls {
  display: none;
}
.coh-video-hide-center-play .mejs__overlay-play .mejs__overlay-button,
.coh-video-hide-center-play .mejs__overlay-loading-bg-img {
  display: none;
}
.coh-video-vimeo_iframe .mejs__iframe-overlay,
.coh-video-vimeo_iframe .mejs__poster,
.coh-video-vimeo_iframe .mejs__overlay-play, .coh-video-youtube_iframe .mejs__iframe-overlay,
.coh-video-youtube_iframe .mejs__poster,
.coh-video-youtube_iframe .mejs__overlay-play {
  display: none;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__563bcdbd8696cea42f9a11ae0c661520";
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
        return new Source("", "__string_template__563bcdbd8696cea42f9a11ae0c661520", "");
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
