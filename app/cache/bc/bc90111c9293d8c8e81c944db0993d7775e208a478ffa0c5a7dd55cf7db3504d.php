<?php

/* @bolt/editcontent/fields/_html.twig */
class __TwigTemplate_ab2450e294f0af067bf4f9a0bb4a35fc21ba9ef35e267c336081637ca4793d63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 38
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_html.twig", 38);
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
        $__internal_763a14d06f1fe1ae8060706dd469097bed08f3debb2af06c27217a8d3e05fc47 = $this->env->getExtension("native_profiler");
        $__internal_763a14d06f1fe1ae8060706dd469097bed08f3debb2af06c27217a8d3e05fc47->enter($__internal_763a14d06f1fe1ae8060706dd469097bed08f3debb2af06c27217a8d3e05fc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_html.twig"));

        // line 3
        $context["option"] = array("class" => trim(("form-control " . $this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array()))), "height" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array()), "")) : ("")), "label" => $this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "label", array()), "required" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")), "options" => (($this->getAttribute($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "ckeditor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "ckeditor", array()), "")) : ("")));
        // line 15
        $context["param"] = array();
        // line 17
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "height", array())) {
            // line 18
            $context["param"] = twig_array_merge((isset($context["param"]) ? $context["param"] : null), array("height" => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "height", array())));
        }
        // line 21
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "options", array())) {
            // line 22
            $context["param"] = twig_array_merge((isset($context["param"]) ? $context["param"] : null), array("ckeditor" => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "options", array())));
        }
        // line 25
        $context["attributes"] = array("html" => array("class" => ($this->getAttribute(        // line 27
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " ckeditor"), "data_errortext" => $this->getAttribute(        // line 28
(isset($context["option"]) ? $context["option"] : null), "errortext", array()), "data_param" => ((        // line 29
(isset($context["param"]) ? $context["param"] : null)) ? (twig_jsonencode_filter((isset($context["param"]) ? $context["param"] : null))) : ("")), "id" =>         // line 30
(isset($context["key"]) ? $context["key"] : null), "name" =>         // line 31
(isset($context["name"]) ? $context["name"] : null), "required" => $this->getAttribute(        // line 32
(isset($context["option"]) ? $context["option"] : null), "required", array())));
        // line 38
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_763a14d06f1fe1ae8060706dd469097bed08f3debb2af06c27217a8d3e05fc47->leave($__internal_763a14d06f1fe1ae8060706dd469097bed08f3debb2af06c27217a8d3e05fc47_prof);

    }

    // line 40
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_5e92263ef1082e54684e4e493723737ac0ee7ffa93913c8c7e12731020821831 = $this->env->getExtension("native_profiler");
        $__internal_5e92263ef1082e54684e4e493723737ac0ee7ffa93913c8c7e12731020821831->enter($__internal_5e92263ef1082e54684e4e493723737ac0ee7ffa93913c8c7e12731020821831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "html";
        
        $__internal_5e92263ef1082e54684e4e493723737ac0ee7ffa93913c8c7e12731020821831->leave($__internal_5e92263ef1082e54684e4e493723737ac0ee7ffa93913c8c7e12731020821831_prof);

    }

    // line 41
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_68d3794b7c5d7d8ef7faf952eab3b68fcc2940715df322fce65c92724f5ddb31 = $this->env->getExtension("native_profiler");
        $__internal_68d3794b7c5d7d8ef7faf952eab3b68fcc2940715df322fce65c92724f5ddb31->enter($__internal_68d3794b7c5d7d8ef7faf952eab3b68fcc2940715df322fce65c92724f5ddb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldHtml";
        
        $__internal_68d3794b7c5d7d8ef7faf952eab3b68fcc2940715df322fce65c92724f5ddb31->leave($__internal_68d3794b7c5d7d8ef7faf952eab3b68fcc2940715df322fce65c92724f5ddb31_prof);

    }

    // line 43
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_212f4db5c275f760398052457a21ac1cb03eea0cfddaac3f296043a3bf59f68c = $this->env->getExtension("native_profiler");
        $__internal_212f4db5c275f760398052457a21ac1cb03eea0cfddaac3f296043a3bf59f68c->enter($__internal_212f4db5c275f760398052457a21ac1cb03eea0cfddaac3f296043a3bf59f68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : null), "html", null, true);
        
        $__internal_212f4db5c275f760398052457a21ac1cb03eea0cfddaac3f296043a3bf59f68c->leave($__internal_212f4db5c275f760398052457a21ac1cb03eea0cfddaac3f296043a3bf59f68c_prof);

    }

    // line 44
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_64e4af37d1ce0d590263dfe0ddbf44bb809391b0246654fd80d4de04a8d06c20 = $this->env->getExtension("native_profiler");
        $__internal_64e4af37d1ce0d590263dfe0ddbf44bb809391b0246654fd80d4de04a8d06c20->enter($__internal_64e4af37d1ce0d590263dfe0ddbf44bb809391b0246654fd80d4de04a8d06c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array()), "html", null, true);
        
        $__internal_64e4af37d1ce0d590263dfe0ddbf44bb809391b0246654fd80d4de04a8d06c20->leave($__internal_64e4af37d1ce0d590263dfe0ddbf44bb809391b0246654fd80d4de04a8d06c20_prof);

    }

    // line 45
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_a5fe6640f81295da730e1c32d0905bf828bd4043e40a599e096b7cd0dc868d38 = $this->env->getExtension("native_profiler");
        $__internal_a5fe6640f81295da730e1c32d0905bf828bd4043e40a599e096b7cd0dc868d38->enter($__internal_a5fe6640f81295da730e1c32d0905bf828bd4043e40a599e096b7cd0dc868d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-xs-12";
        
        $__internal_a5fe6640f81295da730e1c32d0905bf828bd4043e40a599e096b7cd0dc868d38->leave($__internal_a5fe6640f81295da730e1c32d0905bf828bd4043e40a599e096b7cd0dc868d38_prof);

    }

    // line 47
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_0ce05890c4c9df4d67f0f603253266f109a41242465691620e5dce7a0cb93dd7 = $this->env->getExtension("native_profiler");
        $__internal_0ce05890c4c9df4d67f0f603253266f109a41242465691620e5dce7a0cb93dd7->enter($__internal_0ce05890c4c9df4d67f0f603253266f109a41242465691620e5dce7a0cb93dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 48
        echo "    <div class=\"col-xs-12\">
        <textarea";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "html", array())), "method"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
";
        
        $__internal_0ce05890c4c9df4d67f0f603253266f109a41242465691620e5dce7a0cb93dd7->leave($__internal_0ce05890c4c9df4d67f0f603253266f109a41242465691620e5dce7a0cb93dd7_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 49,  135 => 48,  129 => 47,  117 => 45,  105 => 44,  93 => 43,  81 => 41,  69 => 40,  62 => 38,  60 => 32,  59 => 31,  58 => 30,  57 => 29,  56 => 28,  55 => 27,  54 => 25,  51 => 22,  49 => 21,  46 => 18,  44 => 17,  42 => 15,  40 => 10,  39 => 9,  38 => 8,  37 => 7,  36 => 6,  35 => 5,  34 => 4,  33 => 3,  11 => 38,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* */
/* {% set option = {*/
/*     class:     ('form-control ' ~ field.class)|trim,*/
/*     height:    field.height|default(''),*/
/*     label:     field.label,*/
/*     required:  field.required|default(false),*/
/*     errortext: field.error|default(''),*/
/*     info:      field.info|default(''),*/
/*     options:   field.options.ckeditor|default('')*/
/* } %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set param = {} %}*/
/* */
/* {% if option.height %}*/
/*     {% set param = param|merge({height: option.height}) %}*/
/* {% endif %}*/
/* */
/* {% if option.options %}*/
/*     {% set param = param|merge({ckeditor: option.options}) %}*/
/* {% endif %}*/
/* */
/* {% set attributes = {*/
/*     html: {*/
/*         class:           option.class ~ ' ckeditor',*/
/*         data_errortext:  option.errortext,*/
/*         data_param:      param ? param|json_encode : '',*/
/*         id:              key,*/
/*         name:            name,*/
/*         required:        option.required,*/
/*     }*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% block fieldset_type 'html' %}*/
/* {% block fieldset_widget 'fieldHtml' %}*/
/* */
/* {% block fieldset_label_text  labelkey %}*/
/* {% block fieldset_label_info  option.info %}*/
/* {% block fieldset_label_class 'col-xs-12' %}*/
/* */
/* {% block fieldset_controls %}*/
/*     <div class="col-xs-12">*/
/*         <textarea{{ macro.attr(attributes.html) }}>{{ context.content.get(contentkey)|default('') }}</textarea>*/
/*     </div>*/
/* {% endblock fieldset_controls %}*/
/* */
