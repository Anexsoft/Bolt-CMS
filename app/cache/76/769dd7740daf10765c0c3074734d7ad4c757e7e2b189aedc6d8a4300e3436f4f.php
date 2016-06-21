<?php

/* @bolt/editcontent/fields/_textarea.twig */
class __TwigTemplate_c132f2ceae31eac4f0c6560fe3cd9a57bc5b87d29366b73f800c6dec272442c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 27
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_textarea.twig", 27);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_info' => array($this, 'block_fieldset_label_info'),
            'fieldset_label_class' => array($this, 'block_fieldset_label_class'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_fieldset.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb8b3fd49836a943d9caba0d3a50f02dca74c2724ff9ed886b34e23bedfc5d39 = $this->env->getExtension("native_profiler");
        $__internal_eb8b3fd49836a943d9caba0d3a50f02dca74c2724ff9ed886b34e23bedfc5d39->enter($__internal_eb8b3fd49836a943d9caba0d3a50f02dca74c2724ff9ed886b34e23bedfc5d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_textarea.twig"));

        // line 3
        $context["option"] = array("class" => trim(("form-control " . $this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array()))), "height" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array()), "")) : ("")), "label" => $this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "label", array()), "info" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "placeholder" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()), "")) : ("")));
        // line 15
        $context["attributes"] = array("text" => array("class" => $this->getAttribute(        // line 17
(isset($context["option"]) ? $context["option"] : null), "class", array()), "data_errortext" => $this->getAttribute(        // line 18
(isset($context["option"]) ? $context["option"] : null), "errortext", array()), "name" =>         // line 19
(isset($context["name"]) ? $context["name"] : null), "required" => $this->getAttribute(        // line 20
(isset($context["option"]) ? $context["option"] : null), "required", array()), "style" => (($this->getAttribute(        // line 21
(isset($context["option"]) ? $context["option"] : null), "height", array())) ? ((("height: " . $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "height", array())) . ";")) : (""))));
        // line 27
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb8b3fd49836a943d9caba0d3a50f02dca74c2724ff9ed886b34e23bedfc5d39->leave($__internal_eb8b3fd49836a943d9caba0d3a50f02dca74c2724ff9ed886b34e23bedfc5d39_prof);

    }

    // line 29
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_941b641332663217cda0275aec8f1858b3799308ff1bed9b8b40b5ada048b081 = $this->env->getExtension("native_profiler");
        $__internal_941b641332663217cda0275aec8f1858b3799308ff1bed9b8b40b5ada048b081->enter($__internal_941b641332663217cda0275aec8f1858b3799308ff1bed9b8b40b5ada048b081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "textarea";
        
        $__internal_941b641332663217cda0275aec8f1858b3799308ff1bed9b8b40b5ada048b081->leave($__internal_941b641332663217cda0275aec8f1858b3799308ff1bed9b8b40b5ada048b081_prof);

    }

    // line 30
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_ada0468b4103198a8f97342102e28047f4f654fa7ca43749a5182cdb4150017c = $this->env->getExtension("native_profiler");
        $__internal_ada0468b4103198a8f97342102e28047f4f654fa7ca43749a5182cdb4150017c->enter($__internal_ada0468b4103198a8f97342102e28047f4f654fa7ca43749a5182cdb4150017c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldTextarea";
        
        $__internal_ada0468b4103198a8f97342102e28047f4f654fa7ca43749a5182cdb4150017c->leave($__internal_ada0468b4103198a8f97342102e28047f4f654fa7ca43749a5182cdb4150017c_prof);

    }

    // line 32
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_8134b5ea21b06eae5d853b3646cc1f95d4b66347642c708689e7ff581fd9803d = $this->env->getExtension("native_profiler");
        $__internal_8134b5ea21b06eae5d853b3646cc1f95d4b66347642c708689e7ff581fd9803d->enter($__internal_8134b5ea21b06eae5d853b3646cc1f95d4b66347642c708689e7ff581fd9803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : null), "html", null, true);
        
        $__internal_8134b5ea21b06eae5d853b3646cc1f95d4b66347642c708689e7ff581fd9803d->leave($__internal_8134b5ea21b06eae5d853b3646cc1f95d4b66347642c708689e7ff581fd9803d_prof);

    }

    // line 33
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_95427e9e9b65fb57d2b5076a7f0678df46c5b96007e52977681a319daaa42211 = $this->env->getExtension("native_profiler");
        $__internal_95427e9e9b65fb57d2b5076a7f0678df46c5b96007e52977681a319daaa42211->enter($__internal_95427e9e9b65fb57d2b5076a7f0678df46c5b96007e52977681a319daaa42211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array()), "html", null, true);
        
        $__internal_95427e9e9b65fb57d2b5076a7f0678df46c5b96007e52977681a319daaa42211->leave($__internal_95427e9e9b65fb57d2b5076a7f0678df46c5b96007e52977681a319daaa42211_prof);

    }

    // line 34
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_35255ecda15861b068a5d4a61ce1871f0d8605eca882af6d1a106fd2bd30a592 = $this->env->getExtension("native_profiler");
        $__internal_35255ecda15861b068a5d4a61ce1871f0d8605eca882af6d1a106fd2bd30a592->enter($__internal_35255ecda15861b068a5d4a61ce1871f0d8605eca882af6d1a106fd2bd30a592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-xs-12 control-label";
        
        $__internal_35255ecda15861b068a5d4a61ce1871f0d8605eca882af6d1a106fd2bd30a592->leave($__internal_35255ecda15861b068a5d4a61ce1871f0d8605eca882af6d1a106fd2bd30a592_prof);

    }

    // line 36
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_2fe3ec8568cc5841a208ef97ae6e9f20e5b7a0ea307f0cc54d7e3043ee9d6c3c = $this->env->getExtension("native_profiler");
        $__internal_2fe3ec8568cc5841a208ef97ae6e9f20e5b7a0ea307f0cc54d7e3043ee9d6c3c->enter($__internal_2fe3ec8568cc5841a208ef97ae6e9f20e5b7a0ea307f0cc54d7e3043ee9d6c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 37
        echo "    <div class=\"col-xs-12\">
        <textarea";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "text", array())), "method"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, _twig_default_filter((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))), ""), "html", null, true);
        echo "</textarea>
    </div>
";
        
        $__internal_2fe3ec8568cc5841a208ef97ae6e9f20e5b7a0ea307f0cc54d7e3043ee9d6c3c->leave($__internal_2fe3ec8568cc5841a208ef97ae6e9f20e5b7a0ea307f0cc54d7e3043ee9d6c3c_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  122 => 37,  116 => 36,  104 => 34,  92 => 33,  80 => 32,  68 => 30,  56 => 29,  49 => 27,  47 => 21,  46 => 20,  45 => 19,  44 => 18,  43 => 17,  42 => 15,  40 => 10,  39 => 9,  38 => 8,  37 => 7,  36 => 6,  35 => 5,  34 => 4,  33 => 3,  11 => 27,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* */
/* {% set option = {*/
/*     class:       ('form-control ' ~ field.class)|trim,*/
/*     height:      field.height|default(''),*/
/*     label:       field.label,*/
/*     info:        field.info|default(''),*/
/*     required:    field.required|default(false),*/
/*     errortext:   field.error|default(''),*/
/*     placeholder: field.placeholder|default(''),*/
/* } %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set attributes = {*/
/*     text: {*/
/*         class:           option.class,*/
/*         data_errortext:  option.errortext,*/
/*         name:            name,*/
/*         required:        option.required,*/
/*         style:           option.height ? 'height: ' ~ option.height ~ ';' : '',*/
/*     }*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% block fieldset_type 'textarea' %}*/
/* {% block fieldset_widget 'fieldTextarea' %}*/
/* */
/* {% block fieldset_label_text  labelkey %}*/
/* {% block fieldset_label_info  option.info %}*/
/* {% block fieldset_label_class 'col-xs-12 control-label' %}*/
/* */
/* {% block fieldset_controls %}*/
/*     <div class="col-xs-12">*/
/*         <textarea{{ macro.attr(attributes.text) }}>{{ context.content.get(contentkey)|default(field.default)|default('') }}</textarea>*/
/*     </div>*/
/* {% endblock fieldset_controls %}*/
/* */
