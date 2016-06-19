<?php

/* @bolt/_nav/_footer.twig */
class __TwigTemplate_d5be4c0e5ad0d6c781319dcb4709a4dd7049008791bf5c79d0a982424b61b60a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efc5d7c2c755656cabe6a08f38874dd857296145871a8bf10f7002a0f5c3ddab = $this->env->getExtension("native_profiler");
        $__internal_efc5d7c2c755656cabe6a08f38874dd857296145871a8bf10f7002a0f5c3ddab->enter($__internal_efc5d7c2c755656cabe6a08f38874dd857296145871a8bf10f7002a0f5c3ddab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_footer.twig"));

        // line 1
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/provided_link"), "method"))) {
            // line 2
            echo "
    <footer id=\"bolt-footer\" class=\"hidden-xs ";
            // line 3
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
                echo "bolt-footer-hidden";
            }
            echo "\">
        ";
            // line 4
            echo $this->env->getExtension('Bolt')->trans("general.phrase.provided-by-colon");
            echo "
        ";
            // line 5
            echo $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/provided_link"), "method");
            echo " &ndash;
        <i class=\"fa fa-cog\"></i> <b>Bolt ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["bolt_version"]) ? $context["bolt_version"] : null), "html", null, true);
            echo "</b>:
        <i class=\"fa fa-heart\"></i > <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("about");
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("general.about");
            echo "</a> &ndash;
        <i class=\"fa fa-external-link-square\"></i> <a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
    </footer>

";
        } else {
            // line 12
            echo "
    <footer id=\"bolt-footer\" class=\"hidden-xs bolt-footer-mini ";
            // line 13
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
                echo "bolt-footer-hidden";
            }
            echo "\">
        <i class=\"fa fa-cog\"></i> <a href=\"http://bolt.cm\" target=\"_blank\">Bolt ";
            // line 14
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["bolt_version"]) ? $context["bolt_version"] : null), array("alpha" => "α", " beta " => "β")), "html", null, true);
            echo "</a> &ndash;
        <i class=\"fa fa-heart\"></i > <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("about");
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("general.about");
            echo "</a>
    </footer>

";
        }
        
        $__internal_efc5d7c2c755656cabe6a08f38874dd857296145871a8bf10f7002a0f5c3ddab->leave($__internal_efc5d7c2c755656cabe6a08f38874dd857296145871a8bf10f7002a0f5c3ddab_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  64 => 14,  58 => 13,  55 => 12,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if app.config.get('general/branding/provided_link') is not empty %}*/
/* */
/*     <footer id="bolt-footer" class="hidden-xs {% if app.request.cookies.get('sidebar') %}bolt-footer-hidden{% endif %}">*/
/*         {{ __('general.phrase.provided-by-colon') }}*/
/*         {{ app.config.get('general/branding/provided_link')|raw }} &ndash;*/
/*         <i class="fa fa-cog"></i> <b>Bolt {{ bolt_version }}</b>:*/
/*         <i class="fa fa-heart"></i > <a href="{{ path('about') }}">{{ __('general.about') }}</a> &ndash;*/
/*         <i class="fa fa-external-link-square"></i> <a href="http://bolt.cm" target="_blank">Bolt.cm</a>*/
/*     </footer>*/
/* */
/* {% else %}*/
/* */
/*     <footer id="bolt-footer" class="hidden-xs bolt-footer-mini {% if app.request.cookies.get('sidebar') %}bolt-footer-hidden{% endif %}">*/
/*         <i class="fa fa-cog"></i> <a href="http://bolt.cm" target="_blank">Bolt {{ bolt_version|replace({'alpha': 'α', ' beta ': 'β'}) }}</a> &ndash;*/
/*         <i class="fa fa-heart"></i > <a href="{{ path('about') }}">{{ __('general.about') }}</a>*/
/*     </footer>*/
/* */
/* {% endif %}*/
/* */
