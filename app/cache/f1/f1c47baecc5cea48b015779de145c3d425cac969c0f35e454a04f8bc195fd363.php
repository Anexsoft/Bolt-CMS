<?php

/* @bolt/_nav/_secondary-translations.twig */
class __TwigTemplate_9e50a415013da1f905891386f4d2c68258dfe4a7f273c688c1d44ab41297fb16 extends Twig_Template
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
        $__internal_8c1b6ab0c7b06ea4390a53bc56d80756cb1e65faaf5c6472a43c006c01899e5f = $this->env->getExtension("native_profiler");
        $__internal_8c1b6ab0c7b06ea4390a53bc56d80756cb1e65faaf5c6472a43c006c01899e5f->enter($__internal_8c1b6ab0c7b06ea4390a53bc56d80756cb1e65faaf5c6472a43c006c01899e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-translations.twig"));

        // line 1
        $context["tr_menu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "menu.admin", array(), "array"), "get", array(0 => "translations"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_messages"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_messages"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_messages"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_messages"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_long_messages"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_long_messages"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_long_messages"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_long_messages"), "method"), "permission", array())), 2 => array("icon" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_contenttypes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 15
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_contenttypes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 16
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_contenttypes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 17
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_contenttypes"), "method"), "permission", array())));
        // line 20
        echo "
";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:flag", 1 => $this->env->getExtension('Bolt')->trans("general.phrase.translations"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/Translations")), "method"), "html", null, true);
        echo "
";
        
        $__internal_8c1b6ab0c7b06ea4390a53bc56d80756cb1e65faaf5c6472a43c006c01899e5f->leave($__internal_8c1b6ab0c7b06ea4390a53bc56d80756cb1e65faaf5c6472a43c006c01899e5f_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 21,  38 => 20,  36 => 17,  35 => 16,  34 => 15,  33 => 14,  32 => 12,  31 => 11,  30 => 10,  29 => 9,  28 => 7,  27 => 6,  26 => 5,  25 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% set tr_menu = app['menu.admin'].get('translations') %}*/
/* {% set sub = [*/
/*     {*/
/*         icon: tr_menu.get('tr_messages').icon,*/
/*         label: tr_menu.get('tr_messages').label,*/
/*         link: tr_menu.get('tr_messages').uri,*/
/*         isallowed: tr_menu.get('tr_messages').permission*/
/*     }, {*/
/*         icon: tr_menu.get('tr_long_messages').icon,*/
/*         label: tr_menu.get('tr_long_messages').label,*/
/*         link: tr_menu.get('tr_long_messages').uri,*/
/*         isallowed: tr_menu.get('tr_long_messages').permission*/
/*     }, {*/
/*         icon: tr_menu.get('tr_contenttypes').icon,*/
/*         label: tr_menu.get('tr_contenttypes').label,*/
/*         link: tr_menu.get('tr_contenttypes').uri,*/
/*         isallowed: tr_menu.get('tr_contenttypes').permission*/
/*     }*/
/* ] %}*/
/* */
/* {{ nav.submenu('fa:flag', __('general.phrase.translations'), sub, (page_nav == 'Settings/Translations')) }}*/
/* */
