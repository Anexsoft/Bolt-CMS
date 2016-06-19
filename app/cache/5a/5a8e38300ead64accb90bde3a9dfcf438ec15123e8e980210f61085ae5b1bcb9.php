<?php

/* @bolt/editcontent/fields/_text.twig */
class __TwigTemplate_cb294f0312dbedfad4252998085ddf04a796f24bc6bd74cd29c6e96c10e65add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 40
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_text.twig", 40);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_info' => array($this, 'block_fieldset_label_info'),
            'fieldset_label_class' => array($this, 'block_fieldset_label_class'),
            'fieldset_label_for' => array($this, 'block_fieldset_label_for'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_fieldset.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffdc54dd212bce7224cc762086f07450196fddafba64b2a713f3072eb4e39ca6 = $this->env->getExtension("native_profiler");
        $__internal_ffdc54dd212bce7224cc762086f07450196fddafba64b2a713f3072eb4e39ca6->enter($__internal_ffdc54dd212bce7224cc762086f07450196fddafba64b2a713f3072eb4e39ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_text.twig"));

        // line 3
        $context["option"] = array("class" => trim(("form-control " . $this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array()))), "label" => $this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array()), "pattern" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "pattern", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern", array()), "")) : ("")), "placeholder" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "readonly" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "readonly", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), false)) : (false)), "title" => (($this->getAttribute(        // line 11
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()), "")) : ("")), "variant" => $this->getAttribute(        // line 12
(isset($context["field"]) ? $context["field"] : null), "variant", array()), "info" => (($this->getAttribute(        // line 13
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")));
        // line 19
        $context["attributes"] = array("text" => array("class" => $this->getAttribute(        // line 21
(isset($context["option"]) ? $context["option"] : null), "class", array()), "data_errortext" => $this->getAttribute(        // line 22
(isset($context["option"]) ? $context["option"] : null), "errortext", array()), "id" =>         // line 23
(isset($context["key"]) ? $context["key"] : null), "maxlength" => 255, "name" =>         // line 25
(isset($context["name"]) ? $context["name"] : null), "pattern" => ((($this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : null), "pattern", array()) && !twig_in_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "pattern", array()), array(0 => "url", 1 => "email")))) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "pattern", array())) : ("")), "placeholder" => $this->getAttribute(        // line 27
(isset($context["option"]) ? $context["option"] : null), "placeholder", array()), "readonly" => $this->getAttribute(        // line 28
(isset($context["option"]) ? $context["option"] : null), "readonly", array()), "required" => $this->getAttribute(        // line 29
(isset($context["option"]) ? $context["option"] : null), "required", array()), "title" => $this->getAttribute(        // line 30
(isset($context["option"]) ? $context["option"] : null), "title", array()), "type" => ((twig_in_filter($this->getAttribute(        // line 31
(isset($context["option"]) ? $context["option"] : null), "pattern", array()), array(0 => "url", 1 => "email"))) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "pattern", array())) : ("text")), "value" => _twig_default_filter((($this->getAttribute($this->getAttribute(        // line 32
(isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))), "")));
        // line 36
        $context["class"] = ((($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "variant", array()) == "inline")) ? (array(0 => "col-sm-3", 1 => "col-sm-9")) : (array(0 => "col-xs-12", 1 => "col-xs-12")));
        // line 40
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffdc54dd212bce7224cc762086f07450196fddafba64b2a713f3072eb4e39ca6->leave($__internal_ffdc54dd212bce7224cc762086f07450196fddafba64b2a713f3072eb4e39ca6_prof);

    }

    // line 42
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_57e50c2b2c37c04237286f48845e91c31ce7427e6279ab4f3d13aa81f135ddb3 = $this->env->getExtension("native_profiler");
        $__internal_57e50c2b2c37c04237286f48845e91c31ce7427e6279ab4f3d13aa81f135ddb3->enter($__internal_57e50c2b2c37c04237286f48845e91c31ce7427e6279ab4f3d13aa81f135ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "text";
        
        $__internal_57e50c2b2c37c04237286f48845e91c31ce7427e6279ab4f3d13aa81f135ddb3->leave($__internal_57e50c2b2c37c04237286f48845e91c31ce7427e6279ab4f3d13aa81f135ddb3_prof);

    }

    // line 43
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_c45256887e592deb3b22c1f44abbf5a0458fe29c1d87106c39bcc5f0cf7782ec = $this->env->getExtension("native_profiler");
        $__internal_c45256887e592deb3b22c1f44abbf5a0458fe29c1d87106c39bcc5f0cf7782ec->enter($__internal_c45256887e592deb3b22c1f44abbf5a0458fe29c1d87106c39bcc5f0cf7782ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldText";
        
        $__internal_c45256887e592deb3b22c1f44abbf5a0458fe29c1d87106c39bcc5f0cf7782ec->leave($__internal_c45256887e592deb3b22c1f44abbf5a0458fe29c1d87106c39bcc5f0cf7782ec_prof);

    }

    // line 45
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_37ddc74ca4b7b1a2161110696f27b8c81b5c1250824db8c42845115b53b7f6be = $this->env->getExtension("native_profiler");
        $__internal_37ddc74ca4b7b1a2161110696f27b8c81b5c1250824db8c42845115b53b7f6be->enter($__internal_37ddc74ca4b7b1a2161110696f27b8c81b5c1250824db8c42845115b53b7f6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : null), "html", null, true);
        
        $__internal_37ddc74ca4b7b1a2161110696f27b8c81b5c1250824db8c42845115b53b7f6be->leave($__internal_37ddc74ca4b7b1a2161110696f27b8c81b5c1250824db8c42845115b53b7f6be_prof);

    }

    // line 46
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_a65f73a460f821d8a4d9f6e55f82d63b2254061dc0ff0b34e479ede3ef3725c2 = $this->env->getExtension("native_profiler");
        $__internal_a65f73a460f821d8a4d9f6e55f82d63b2254061dc0ff0b34e479ede3ef3725c2->enter($__internal_a65f73a460f821d8a4d9f6e55f82d63b2254061dc0ff0b34e479ede3ef3725c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array()), "html", null, true);
        
        $__internal_a65f73a460f821d8a4d9f6e55f82d63b2254061dc0ff0b34e479ede3ef3725c2->leave($__internal_a65f73a460f821d8a4d9f6e55f82d63b2254061dc0ff0b34e479ede3ef3725c2_prof);

    }

    // line 47
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_91916ce92a666a9897a1f82c332b9bf5f29cb8043f15f6f949aa743ccf31da18 = $this->env->getExtension("native_profiler");
        $__internal_91916ce92a666a9897a1f82c332b9bf5f29cb8043f15f6f949aa743ccf31da18->enter($__internal_91916ce92a666a9897a1f82c332b9bf5f29cb8043f15f6f949aa743ccf31da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo twig_escape_filter($this->env, ("control-label " . $this->getAttribute((isset($context["class"]) ? $context["class"] : null), 0, array(), "array")), "html", null, true);
        
        $__internal_91916ce92a666a9897a1f82c332b9bf5f29cb8043f15f6f949aa743ccf31da18->leave($__internal_91916ce92a666a9897a1f82c332b9bf5f29cb8043f15f6f949aa743ccf31da18_prof);

    }

    // line 48
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        $__internal_7ddc9b9b70a502b5ebcf95308f257edf9e11d7c3f50659df7c69f6727461f8e0 = $this->env->getExtension("native_profiler");
        $__internal_7ddc9b9b70a502b5ebcf95308f257edf9e11d7c3f50659df7c69f6727461f8e0->enter($__internal_7ddc9b9b70a502b5ebcf95308f257edf9e11d7c3f50659df7c69f6727461f8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_for"));

        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        
        $__internal_7ddc9b9b70a502b5ebcf95308f257edf9e11d7c3f50659df7c69f6727461f8e0->leave($__internal_7ddc9b9b70a502b5ebcf95308f257edf9e11d7c3f50659df7c69f6727461f8e0_prof);

    }

    // line 50
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_d9fac42d4425e35bb8921e02a5e6f0986bfbfc4eb9ba5599bd655cddbe65318e = $this->env->getExtension("native_profiler");
        $__internal_d9fac42d4425e35bb8921e02a5e6f0986bfbfc4eb9ba5599bd655cddbe65318e->enter($__internal_d9fac42d4425e35bb8921e02a5e6f0986bfbfc4eb9ba5599bd655cddbe65318e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 51
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : null), 1, array(), "array"), "html", null, true);
        echo "\">
        <input";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "text", array())), "method"), "html", null, true);
        echo ">
    </div>
";
        
        $__internal_d9fac42d4425e35bb8921e02a5e6f0986bfbfc4eb9ba5599bd655cddbe65318e->leave($__internal_d9fac42d4425e35bb8921e02a5e6f0986bfbfc4eb9ba5599bd655cddbe65318e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 52,  146 => 51,  140 => 50,  128 => 48,  116 => 47,  104 => 46,  92 => 45,  80 => 43,  68 => 42,  61 => 40,  59 => 36,  57 => 32,  56 => 31,  55 => 30,  54 => 29,  53 => 28,  52 => 27,  51 => 26,  50 => 25,  49 => 23,  48 => 22,  47 => 21,  46 => 19,  44 => 13,  43 => 12,  42 => 11,  41 => 10,  40 => 9,  39 => 8,  38 => 7,  37 => 6,  36 => 5,  35 => 4,  34 => 3,  11 => 40,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* */
/* {% set option = {*/
/*     class:        ('form-control ' ~ field.class)|trim,*/
/*     label:        field.label,*/
/*     pattern:      field.pattern|default(''),*/
/*     placeholder:  field.placeholder|default(''),*/
/*     required:     field.required|default(false),*/
/*     errortext:    field.error|default(''),*/
/*     readonly:     field.readonly|default(false),*/
/*     title:        field.title|default(''),*/
/*     variant:      field.variant,*/
/*     info:         field.info|default('')*/
/* } %}*/
/* {# variant[inline] #}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set attributes = {*/
/*     text: {*/
/*         class:           option.class,*/
/*         data_errortext:  option.errortext,*/
/*         id:              key,*/
/*         maxlength:       255,*/
/*         name:            name,*/
/*         pattern:         (option.pattern and option.pattern not in ['url', 'email']) ? option.pattern : '',*/
/*         placeholder:     option.placeholder,*/
/*         readonly:        option.readonly,*/
/*         required:        option.required,*/
/*         title:           option.title,*/
/*         type:            (option.pattern in ['url', 'email']) ? option.pattern : 'text',*/
/*         value:           context.content.get(contentkey)|default(field.default)|default(''),*/
/*     }*/
/* } %}*/
/* */
/* {% set class = option.variant == 'inline' ? ['col-sm-3', 'col-sm-9'] : ['col-xs-12', 'col-xs-12'] %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% block fieldset_type 'text' %}*/
/* {% block fieldset_widget 'fieldText' %}*/
/* */
/* {% block fieldset_label_text  labelkey %}*/
/* {% block fieldset_label_info  option.info %}*/
/* {% block fieldset_label_class 'control-label ' ~ class[0] %}*/
/* {% block fieldset_label_for   key %}*/
/* */
/* {% block fieldset_controls %}*/
/*     <div class="{{ class[1] }}">*/
/*         <input{{ macro.attr(attributes.text) }}>*/
/*     </div>*/
/* {% endblock fieldset_controls %}*/
/* */
