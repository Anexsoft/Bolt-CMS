<?php

/* @bolt/_nav/_secondary.twig */
class __TwigTemplate_5d56ded5d520fcae89a9d625f0ead6fc40eb262578b0dd70b64c201dee3afc69 extends Twig_Template
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
        $__internal_524a9f96617ff6b0b035c4a5a0571785f921c16e61c9ed936e7deda45bd84a20 = $this->env->getExtension("native_profiler");
        $__internal_524a9f96617ff6b0b035c4a5a0571785f921c16e61c9ed936e7deda45bd84a20->enter($__internal_524a9f96617ff6b0b035c4a5a0571785f921c16e61c9ed936e7deda45bd84a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary.twig"));

        // line 1
        $context["nav"] = $this->loadTemplate("@bolt/_nav/_macros.twig", "@bolt/_nav/_secondary.twig", 1);
        // line 2
        echo "
<ul class=\"nav\">
    ";
        // line 4
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "authentication"), "method"))) {
            // line 5
            echo "
        ";
            // line 7
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/_nav/_secondary-search.twig");
            echo "

        ";
            // line 10
            echo "        ";
            echo $context["nav"]->getlink("fa:dashboard", $this->env->getExtension('Bolt')->trans("general.phrase.dashboard"), "dashboard", ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Dashboard"));
            echo "

        ";
            // line 13
            echo "        <li class=\"visible-xs\">
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.view-site");
            echo "</a>
        </li>

        ";
            // line 18
            echo "        ";
            echo $context["nav"]->getheading($this->env->getExtension('Bolt')->trans("Content"), "fa:file-text");
            echo "
        ";
            // line 19
            echo twig_include($this->env, $context, "@bolt/_nav/_secondary-content.twig");
            echo "

        ";
            // line 22
            echo "        ";
            if ($this->env->getExtension('Bolt')->isAllowed("settings")) {
                // line 23
                echo "            ";
                ob_start();
                echo twig_include($this->env, $context, "@bolt/_nav/_secondary-configuration.twig");
                $context["nav_config"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 24
                echo "            ";
                ob_start();
                echo twig_include($this->env, $context, "@bolt/_nav/_secondary-filemanagement.twig");
                $context["nav_files"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 25
                echo "            ";
                ob_start();
                echo twig_include($this->env, $context, "@bolt/_nav/_secondary-translations.twig");
                $context["nav_trans"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 26
                echo "            ";
                // line 27
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "menu.admin", array(), "array"), "get", array(0 => "extend"), "method"), "children", array()) || $this->env->getExtension('Bolt')->isAllowed("extensions||extensions:config"))) {
                    // line 28
                    echo "                ";
                    ob_start();
                    echo twig_include($this->env, $context, "@bolt/_nav/_secondary-extensions.twig");
                    $context["nav_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "                ";
                    $context["nav_extend"] = "";
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "
            ";
                // line 33
                if ((((trim((isset($context["nav_config"]) ? $context["nav_config"] : null)) || trim((isset($context["nav_files"]) ? $context["nav_files"] : null))) || trim((isset($context["nav_trans"]) ? $context["nav_trans"] : null))) || trim((isset($context["nav_extend"]) ? $context["nav_extend"] : null)))) {
                    // line 34
                    echo "                ";
                    echo $context["nav"]->getheading($this->env->getExtension('Bolt')->trans("general.phrase.settings"), "fa:wrench");
                    echo "

                ";
                    // line 36
                    echo twig_escape_filter($this->env, (isset($context["nav_config"]) ? $context["nav_config"] : null), "html", null, true);
                    echo "
                ";
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["nav_files"]) ? $context["nav_files"] : null), "html", null, true);
                    echo "
                ";
                    // line 38
                    echo twig_escape_filter($this->env, (isset($context["nav_trans"]) ? $context["nav_trans"] : null), "html", null, true);
                    echo "
                ";
                    // line 39
                    echo twig_escape_filter($this->env, (isset($context["nav_extend"]) ? $context["nav_extend"] : null), "html", null, true);
                    echo "
            ";
                }
                // line 41
                echo "
        ";
            }
            // line 43
            echo "

        ";
            // line 45
            echo $context["nav"]->getcollapse();
            echo "

    ";
        } else {
            // line 48
            echo "
        ";
            // line 50
            echo "        <li>
            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.view-site");
            echo "</a>
        </li>

        ";
            // line 55
            echo "        <li>
            <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><i class=\"fa fa-signin\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.login");
            echo "</a>
        </li>
    ";
        }
        // line 59
        echo "</ul>
";
        
        $__internal_524a9f96617ff6b0b035c4a5a0571785f921c16e61c9ed936e7deda45bd84a20->leave($__internal_524a9f96617ff6b0b035c4a5a0571785f921c16e61c9ed936e7deda45bd84a20_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 59,  162 => 56,  159 => 55,  151 => 51,  148 => 50,  145 => 48,  139 => 45,  135 => 43,  131 => 41,  126 => 39,  122 => 38,  118 => 37,  114 => 36,  108 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  94 => 29,  89 => 28,  86 => 27,  84 => 26,  79 => 25,  74 => 24,  69 => 23,  66 => 22,  61 => 19,  56 => 18,  48 => 14,  45 => 13,  39 => 10,  33 => 7,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% import '@bolt/_nav/_macros.twig' as nav %}*/
/* */
/* <ul class="nav">*/
/*     {% if app.session.get('authentication') is not null %}*/
/* */
/*         {# Omnisearch: one here for "extra small", the other in the header-navbar #}*/
/*         {{ include('@bolt/_nav/_secondary-search.twig') }}*/
/* */
/*         {# Dashboard #}*/
/*         {{ nav.link('fa:dashboard', __('general.phrase.dashboard'), 'dashboard', (page_nav == 'Dashboard')) }}*/
/* */
/*         {# View site #}*/
/*         <li class="visible-xs">*/
/*             <a href="{{ paths.root }}" target="_blank"><i class="icon fa fa-external-link-square"></i> {{ __('general.phrase.view-site') }}</a>*/
/*         </li>*/
/* */
/*         {# Contenttypes #}*/
/*         {{ nav.heading(__('Content'), 'fa:file-text') }}*/
/*         {{ include('@bolt/_nav/_secondary-content.twig') }}*/
/* */
/*         {# Settings #}*/
/*         {% if isallowed('settings') %}*/
/*             {% set nav_config %}{{ include('@bolt/_nav/_secondary-configuration.twig') }}{% endset %}*/
/*             {% set nav_files %}{{ include('@bolt/_nav/_secondary-filemanagement.twig') }}{% endset %}*/
/*             {% set nav_trans %}{{ include('@bolt/_nav/_secondary-translations.twig') }}{% endset %}*/
/*             {# Link to Extend Bolt #}*/
/*             {% if app['menu.admin'].get('extend').children or isallowed('extensions||extensions:config') %}*/
/*                 {% set nav_extend %}{{ include('@bolt/_nav/_secondary-extensions.twig') }}{% endset %}*/
/*             {% else %}*/
/*                 {% set nav_extend = '' %}*/
/*             {% endif %}*/
/* */
/*             {% if nav_config|trim or nav_files|trim or nav_trans|trim or nav_extend|trim %}*/
/*                 {{ nav.heading(__('general.phrase.settings'), 'fa:wrench') }}*/
/* */
/*                 {{ nav_config }}*/
/*                 {{ nav_files }}*/
/*                 {{ nav_trans }}*/
/*                 {{ nav_extend }}*/
/*             {% endif %}*/
/* */
/*         {% endif %}*/
/* */
/* */
/*         {{ nav.collapse() }}*/
/* */
/*     {% else %}*/
/* */
/*         {# View site #}*/
/*         <li>*/
/*             <a href="{{ paths.root }}" target="_blank"><i class="fa fa-external-link-square"></i> {{ __('general.phrase.view-site') }}</a>*/
/*         </li>*/
/* */
/*         {# Login #}*/
/*         <li>*/
/*             <a href="{{ path('login') }}"><i class="fa fa-signin"></i> {{ __('general.phrase.login') }}</a>*/
/*         </li>*/
/*     {% endif %}*/
/* </ul>*/
/* */
