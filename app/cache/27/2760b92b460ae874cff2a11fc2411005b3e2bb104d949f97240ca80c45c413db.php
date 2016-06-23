<?php

/* @bolt/_nav/_secondary-configuration.twig */
class __TwigTemplate_62087f100963334320c84b17f4106b9ade8a37e4541f8319a575e8be5b99befd extends Twig_Template
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
        $__internal_b2831a11c998f5a7692acbd9ac0df513c40a105cb1b1e8fecd30e021ec0a34ca = $this->env->getExtension("native_profiler");
        $__internal_b2831a11c998f5a7692acbd9ac0df513c40a105cb1b1e8fecd30e021ec0a34ca->enter($__internal_b2831a11c998f5a7692acbd9ac0df513c40a105cb1b1e8fecd30e021ec0a34ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-configuration.twig"));

        // line 1
        $context["config_menu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "menu.admin", array(), "array"), "get", array(0 => "config"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "users"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "users"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "users"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "users"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_main"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_main"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_main"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_main"), "method"), "permission", array())), 2 => array("icon" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_contenttypes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 15
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_contenttypes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 16
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_contenttypes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 17
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_contenttypes"), "method"), "permission", array())), 3 => array("icon" => $this->getAttribute($this->getAttribute(        // line 19
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_taxonomy"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 20
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_taxonomy"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_taxonomy"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 22
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_taxonomy"), "method"), "permission", array())), 4 => "-", 5 => array("icon" => $this->getAttribute($this->getAttribute(        // line 26
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_menu"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 27
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_menu"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 28
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_menu"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_menu"), "method"), "permission", array())), 6 => array("icon" => $this->getAttribute($this->getAttribute(        // line 31
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_routing"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 32
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_routing"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 33
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_routing"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 34
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_routing"), "method"), "permission", array())), 7 => "-", 8 => array("icon" => $this->getAttribute($this->getAttribute(        // line 38
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "dbcheck"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 39
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "dbcheck"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 40
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "dbcheck"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 41
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "dbcheck"), "method"), "permission", array())), 9 => array("icon" => $this->getAttribute($this->getAttribute(        // line 43
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "clearcache"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 44
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "clearcache"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 45
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "clearcache"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 46
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "clearcache"), "method"), "permission", array())), 10 => array("icon" => $this->getAttribute($this->getAttribute(        // line 48
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_change"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 49
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_change"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 50
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_change"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 51
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_change"), "method"), "permission", array())), 11 => array("icon" => $this->getAttribute($this->getAttribute(        // line 53
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_system"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 54
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_system"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 55
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_system"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 56
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_system"), "method"), "permission", array())));
        // line 59
        echo "
";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:cogs", 1 => $this->env->getExtension('Bolt')->trans("general.phrase.configuration"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/Configuration")), "method"), "html", null, true);
        echo "
";
        
        $__internal_b2831a11c998f5a7692acbd9ac0df513c40a105cb1b1e8fecd30e021ec0a34ca->leave($__internal_b2831a11c998f5a7692acbd9ac0df513c40a105cb1b1e8fecd30e021ec0a34ca_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-configuration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 60,  66 => 59,  64 => 56,  63 => 55,  62 => 54,  61 => 53,  60 => 51,  59 => 50,  58 => 49,  57 => 48,  56 => 46,  55 => 45,  54 => 44,  53 => 43,  52 => 41,  51 => 40,  50 => 39,  49 => 38,  48 => 34,  47 => 33,  46 => 32,  45 => 31,  44 => 29,  43 => 28,  42 => 27,  41 => 26,  40 => 22,  39 => 21,  38 => 20,  37 => 19,  36 => 17,  35 => 16,  34 => 15,  33 => 14,  32 => 12,  31 => 11,  30 => 10,  29 => 9,  28 => 7,  27 => 6,  26 => 5,  25 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% set config_menu = app['menu.admin'].get('config') %}*/
/* {% set sub = [*/
/*     {*/
/*         icon: config_menu.get('users').icon,*/
/*         label: config_menu.get('users').label,*/
/*         link: config_menu.get('users').uri,*/
/*         isallowed: config_menu.get('users').permission*/
/*     }, {*/
/*         icon: config_menu.get('config_main').icon,*/
/*         label: config_menu.get('config_main').label,*/
/*         link: config_menu.get('config_main').uri,*/
/*         isallowed: config_menu.get('config_main').permission*/
/*     }, {*/
/*         icon: config_menu.get('config_contenttypes').icon,*/
/*         label: config_menu.get('config_contenttypes').label,*/
/*         link: config_menu.get('config_contenttypes').uri,*/
/*         isallowed: config_menu.get('config_contenttypes').permission*/
/*     }, {*/
/*         icon: config_menu.get('config_taxonomy').icon,*/
/*         label: config_menu.get('config_taxonomy').label,*/
/*         link: config_menu.get('config_taxonomy').uri,*/
/*         isallowed: config_menu.get('config_taxonomy').permission*/
/*     },*/
/*     '-',*/
/*     {*/
/*         icon: config_menu.get('config_menu').icon,*/
/*         label: config_menu.get('config_menu').label,*/
/*         link: config_menu.get('config_menu').uri,*/
/*         isallowed: config_menu.get('config_menu').permission*/
/*     }, {*/
/*         icon: config_menu.get('config_routing').icon,*/
/*         label: config_menu.get('config_routing').label,*/
/*         link: config_menu.get('config_routing').uri,*/
/*         isallowed: config_menu.get('config_routing').permission*/
/*     },*/
/*     '-',*/
/*     {*/
/*         icon: config_menu.get('dbcheck').icon,*/
/*         label: config_menu.get('dbcheck').label,*/
/*         link: config_menu.get('dbcheck').uri,*/
/*         isallowed: config_menu.get('dbcheck').permission*/
/*     }, {*/
/*         icon: config_menu.get('clearcache').icon,*/
/*         label: config_menu.get('clearcache').label,*/
/*         link: config_menu.get('clearcache').uri,*/
/*         isallowed: config_menu.get('clearcache').permission*/
/*     }, {*/
/*         icon: config_menu.get('log_change').icon,*/
/*         label: config_menu.get('log_change').label,*/
/*         link: config_menu.get('log_change').uri,*/
/*         isallowed: config_menu.get('log_change').permission*/
/*     }, {*/
/*         icon: config_menu.get('log_system').icon,*/
/*         label: config_menu.get('log_system').label,*/
/*         link: config_menu.get('log_system').uri,*/
/*         isallowed: config_menu.get('log_system').permission*/
/*     }*/
/* ] %}*/
/* */
/* {{ nav.submenu('fa:cogs', __('general.phrase.configuration'), sub, (page_nav == 'Settings/Configuration')) }}*/
/* */
