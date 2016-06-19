<?php

/* @bolt/editcontent/fields/_image.twig */
class __TwigTemplate_1267e0703f9c8831ff2ca090da6470d3ce279591a85eea76beff6803fcc0d467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 85
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_image.twig", 85);
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
        $__internal_c5043f7d8ef0d697e19f2b275df1db3dcf0845654ab9bd50497e7d075b0e6ce3 = $this->env->getExtension("native_profiler");
        $__internal_c5043f7d8ef0d697e19f2b275df1db3dcf0845654ab9bd50497e7d075b0e6ce3->enter($__internal_c5043f7d8ef0d697e19f2b275df1db3dcf0845654ab9bd50497e7d075b0e6ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_image.twig"));

        // line 3
        $context["option"] = array("class" => trim(("form-control " . $this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array()))), "label" => $this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array()), "extensions" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array()), array())) : (array())), "attrib" => ((($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true) && twig_test_iterable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array())))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array())) : (array(0 => (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array()), null)) : (null))))), "upload" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "upload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "upload", array()), "")) : ("")), "can_upload" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "canUpload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "canUpload", array()), false)) : (false)), "info" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.upload.image")) : ("info.upload.image")));
        // line 15
        $context["preview_w"] = 200;
        // line 16
        $context["preview_h"] = 150;
        // line 19
        $context["image"] = (((twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method")) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method")))) ? ($this->getAttribute($this->getAttribute(        // line 20
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method")) : (array("file" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"))));
        // line 24
        $context["hattr"] = array("path" => array("class" => ($this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " wide path"), "id" => ("field-" .         // line 27
(isset($context["key"]) ? $context["key"] : null)), "name" => (        // line 28
(isset($context["name"]) ? $context["name"] : null) . "[file]"), "placeholder" => ((($this->env->getExtension('Bolt')->trans("field.general.allowed-filetypes") . " ") . twig_join_filter($this->getAttribute(        // line 29
(isset($context["option"]) ? $context["option"] : null), "extensions", array()), ", ")) . " …"), "type" => "text", "value" => (($this->getAttribute(        // line 31
(isset($context["image"]) ? $context["image"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array()), "")) : (""))), "path_label" => array("for" => ("field-" .         // line 35
(isset($context["key"]) ? $context["key"] : null))), "upload" => array("accept" => (($this->getAttribute(        // line 39
(isset($context["option"]) ? $context["option"] : null), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "extensions", array()), ",."))) : ("")), "data-url" => $this->env->getExtension('routing')->getUrl("upload", array("handler" => $this->getAttribute(        // line 40
(isset($context["option"]) ? $context["option"] : null), "upload", array()))), "id" => ("fileupload-" .         // line 41
(isset($context["key"]) ? $context["key"] : null)), "name" => "files[]", "type" => "file"), "preview" => array("alt" => "Preview", "height" =>         // line 48
(isset($context["preview_h"]) ? $context["preview_h"] : null), "src" => (( !twig_test_empty($this->getAttribute(        // line 49
(isset($context["image"]) ? $context["image"] : null), "file", array()))) ? ($this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c")) : (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "app", array()) . "view/img/default_empty_4x3.png"))), "width" =>         // line 50
(isset($context["preview_w"]) ? $context["preview_w"] : null)));
        // line 54
        $context["attribute_fields"] = array();
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "attrib", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "attrib", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["attrib"]) {
            // line 56
            $context["aid"] = twig_replace_filter(twig_lower_filter($this->env, $context["attrib"]), array("alt text" => "alt"));
            // line 58
            if (twig_in_filter((isset($context["aid"]) ? $context["aid"] : null), array(0 => "title", 1 => "alt"))) {
                // line 59
                if (((isset($context["aid"]) ? $context["aid"] : null) == "title")) {
                    // line 60
                    $context["atitle"] = $this->env->getExtension('Bolt')->trans("Title");
                } elseif ((                // line 61
(isset($context["aid"]) ? $context["aid"] : null) == "alt")) {
                    // line 62
                    $context["atitle"] = $this->env->getExtension('Bolt')->trans("field.image.label.alt");
                }
                // line 65
                $context["uid"] = (((isset($context["key"]) ? $context["key"] : null) . "-") . (isset($context["aid"]) ? $context["aid"] : null));
                // line 67
                $context["attribute_fields"] = twig_array_merge((isset($context["attribute_fields"]) ? $context["attribute_fields"] : null), array(0 => array("title" =>                 // line 68
(isset($context["atitle"]) ? $context["atitle"] : null), "label" => array("for" =>                 // line 70
(isset($context["uid"]) ? $context["uid"] : null)), "input" => array("class" => "form-control", "id" =>                 // line 74
(isset($context["uid"]) ? $context["uid"] : null), "name" => (((                // line 75
(isset($context["key"]) ? $context["key"] : null) . "[") . (isset($context["aid"]) ? $context["aid"] : null)) . "]"), "type" => "text", "value" => (($this->getAttribute(                // line 77
(isset($context["image"]) ? $context["image"] : null), (isset($context["aid"]) ? $context["aid"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), (isset($context["aid"]) ? $context["aid"] : null), array(), "array"), "")) : (""))))));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attrib'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5043f7d8ef0d697e19f2b275df1db3dcf0845654ab9bd50497e7d075b0e6ce3->leave($__internal_c5043f7d8ef0d697e19f2b275df1db3dcf0845654ab9bd50497e7d075b0e6ce3_prof);

    }

    // line 87
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_471aaf9059af173b140cdcc40f17db62ad815defde5329fd143c40485e4e9cd9 = $this->env->getExtension("native_profiler");
        $__internal_471aaf9059af173b140cdcc40f17db62ad815defde5329fd143c40485e4e9cd9->enter($__internal_471aaf9059af173b140cdcc40f17db62ad815defde5329fd143c40485e4e9cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "image";
        
        $__internal_471aaf9059af173b140cdcc40f17db62ad815defde5329fd143c40485e4e9cd9->leave($__internal_471aaf9059af173b140cdcc40f17db62ad815defde5329fd143c40485e4e9cd9_prof);

    }

    // line 88
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_9e87edf6bd974da97b3cfda976dea958433da480383a98ba95c4d3796240962f = $this->env->getExtension("native_profiler");
        $__internal_9e87edf6bd974da97b3cfda976dea958433da480383a98ba95c4d3796240962f->enter($__internal_9e87edf6bd974da97b3cfda976dea958433da480383a98ba95c4d3796240962f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldImage";
        
        $__internal_9e87edf6bd974da97b3cfda976dea958433da480383a98ba95c4d3796240962f->leave($__internal_9e87edf6bd974da97b3cfda976dea958433da480383a98ba95c4d3796240962f_prof);

    }

    // line 90
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_48ac4b06f9eae4ce1196105baee9b1ff734b8c1ce7dc7fdcec2e259c0b8b47c3 = $this->env->getExtension("native_profiler");
        $__internal_48ac4b06f9eae4ce1196105baee9b1ff734b8c1ce7dc7fdcec2e259c0b8b47c3->enter($__internal_48ac4b06f9eae4ce1196105baee9b1ff734b8c1ce7dc7fdcec2e259c0b8b47c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : null), "html", null, true);
        
        $__internal_48ac4b06f9eae4ce1196105baee9b1ff734b8c1ce7dc7fdcec2e259c0b8b47c3->leave($__internal_48ac4b06f9eae4ce1196105baee9b1ff734b8c1ce7dc7fdcec2e259c0b8b47c3_prof);

    }

    // line 91
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_4a86ec26393d54ac6a4c46dc496aa85742a9459c933fa45241dd118ae3fd6ce0 = $this->env->getExtension("native_profiler");
        $__internal_4a86ec26393d54ac6a4c46dc496aa85742a9459c933fa45241dd118ae3fd6ce0->enter($__internal_4a86ec26393d54ac6a4c46dc496aa85742a9459c933fa45241dd118ae3fd6ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array()), "html", null, true);
        
        $__internal_4a86ec26393d54ac6a4c46dc496aa85742a9459c933fa45241dd118ae3fd6ce0->leave($__internal_4a86ec26393d54ac6a4c46dc496aa85742a9459c933fa45241dd118ae3fd6ce0_prof);

    }

    // line 92
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_412edd6c425e8b85ce2415e9699ade8396fe27795c3204411480b51e44f8c433 = $this->env->getExtension("native_profiler");
        $__internal_412edd6c425e8b85ce2415e9699ade8396fe27795c3204411480b51e44f8c433->enter($__internal_412edd6c425e8b85ce2415e9699ade8396fe27795c3204411480b51e44f8c433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-xs-12 control-label";
        
        $__internal_412edd6c425e8b85ce2415e9699ade8396fe27795c3204411480b51e44f8c433->leave($__internal_412edd6c425e8b85ce2415e9699ade8396fe27795c3204411480b51e44f8c433_prof);

    }

    // line 94
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_458393385c3a1829d46b6a74b4c87aae8842e89e3cc371534572ad81e9a261ff = $this->env->getExtension("native_profiler");
        $__internal_458393385c3a1829d46b6a74b4c87aae8842e89e3cc371534572ad81e9a261ff->enter($__internal_458393385c3a1829d46b6a74b4c87aae8842e89e3cc371534572ad81e9a261ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 95
        echo "    <div class=\"col-xs-12 dropzone\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                ";
        // line 99
        echo "                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        <label";
        // line 101
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : null), "path_label", array()));
        echo ">";
        echo $this->env->getExtension('Bolt')->trans("general.phrase.path-image-file");
        echo "</label><input";
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : null), "path", array()));
        echo ">
                    </div>
                </div>

                ";
        // line 106
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attribute_fields"]) ? $context["attribute_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["afield"]) {
            // line 107
            echo "                    <div class=\"form-group\">
                        <div class=\"col-sm-2\">
                            <label";
            // line 109
            echo $this->env->getExtension('Bolt')->hattr($this->getAttribute($context["afield"], "label", array()));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["afield"], "title", array()), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"col-sm-10\">
                            <input";
            // line 112
            echo $this->env->getExtension('Bolt')->hattr($this->getAttribute($context["afield"], "input", array()));
            echo ">
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['afield'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "
                ";
        // line 118
        echo "                <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>

                ";
        // line 121
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "upload_buttons", array(0 => "image", 1 => $this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : null), "upload", array()), 2 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "upload", array()), 3 => ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "can", array()), "upload", array()) && $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "can_upload", array())), 4 => false), "method"), "html", null, true);
        echo "
            </div>

            ";
        // line 125
        echo "            <div class=\"col-xs-4\">
                <div class=\"right-on-large\">
                    <label>";
        // line 127
        echo $this->env->getExtension('Bolt')->trans("general.phrase.preview");
        echo "</label>
                    <div class=\"content-preview imageholder\">
                        <img";
        // line 129
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : null), "preview", array()));
        echo ">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_458393385c3a1829d46b6a74b4c87aae8842e89e3cc371534572ad81e9a261ff->leave($__internal_458393385c3a1829d46b6a74b4c87aae8842e89e3cc371534572ad81e9a261ff_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 129,  235 => 127,  231 => 125,  224 => 121,  220 => 118,  217 => 116,  207 => 112,  199 => 109,  195 => 107,  190 => 106,  179 => 101,  175 => 99,  170 => 95,  164 => 94,  152 => 92,  140 => 91,  128 => 90,  116 => 88,  104 => 87,  97 => 85,  90 => 77,  89 => 75,  88 => 74,  87 => 70,  86 => 68,  85 => 67,  83 => 65,  80 => 62,  78 => 61,  76 => 60,  74 => 59,  72 => 58,  70 => 56,  66 => 55,  64 => 54,  62 => 50,  61 => 49,  60 => 48,  59 => 41,  58 => 40,  57 => 39,  56 => 35,  55 => 31,  54 => 29,  53 => 28,  52 => 27,  51 => 26,  50 => 24,  48 => 21,  47 => 20,  46 => 19,  44 => 16,  42 => 15,  40 => 10,  39 => 9,  38 => 8,  37 => 7,  36 => 6,  35 => 5,  34 => 4,  33 => 3,  11 => 85,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* */
/* {% set option = {*/
/*     class:       ('form-control ' ~ field.class)|trim,*/
/*     label:       field.label,*/
/*     extensions:  field.extensions|default([]),*/
/*     attrib:      (field.attrib is defined and field.attrib is iterable) ? field.attrib : [ field.attrib|default(null) ],*/
/*     upload:      field.upload|default(''),*/
/*     can_upload:  field.canUpload|default(false),*/
/*     info:        field.info|default('info.upload.image')*/
/* } %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set preview_w = 200 %}*/
/* {% set preview_h = 150 %}*/
/* */
/* {# Convert from old stored image format that is used until re-saved #}*/
/* {% set image = (context.content.get(contentkey) is iterable) and (context.content.get(contentkey) is not empty)*/
/*            ? context.content.get(contentkey)*/
/*            : {'file': context.content.get(contentkey)}*/
/* %}*/
/* */
/* {% set hattr = {*/
/*     path: {*/
/*         'class':        option.class ~ ' wide path',*/
/*         'id':           'field-' ~ key,*/
/*         'name':         name ~ '[file]',*/
/*         'placeholder':  __('field.general.allowed-filetypes') ~ ' ' ~ option.extensions|join(', ') ~ ' …',*/
/*         'type':         'text',*/
/*         'value':        image.file|default(''),*/
/*     },*/
/* */
/*     path_label: {*/
/*         'for':          'field-' ~ key,*/
/*     },*/
/* */
/*     upload: {*/
/*         'accept':       option.extensions ? '.' ~ option.extensions|join(',.') : '',*/
/*         'data-url':     url('upload', {'handler': option.upload}),*/
/*         'id':           'fileupload-' ~ key,*/
/*         'name':         'files[]',*/
/*         'type':         'file',*/
/*     },*/
/* */
/*     preview: {*/
/*         'alt':          'Preview',*/
/*         'height':       preview_h,*/
/*         'src':          image.file is not empty ? image.file|thumbnail(preview_w, preview_h, 'c') : app.paths.app ~ 'view/img/default_empty_4x3.png',*/
/*         'width':        preview_w,*/
/*     },*/
/* } %}*/
/* */
/* {% set attribute_fields = [] %}*/
/* {% for attrib in option.attrib|default([]) %}*/
/*     {% set aid = attrib|lower|replace({'alt text': 'alt'}) %}*/
/* */
/*     {% if aid in ['title', 'alt'] %}*/
/*         {% if aid == 'title' %}*/
/*             {% set atitle = __('Title') %}*/
/*         {% elseif aid == 'alt' %}*/
/*             {% set atitle = __('field.image.label.alt') %}*/
/*         {% endif %}*/
/* */
/*         {% set uid = key ~ '-' ~ aid %}*/
/* */
/*         {% set attribute_fields = attribute_fields|merge([{*/
/*             title: atitle,*/
/*             label: {*/
/*                 for:    uid*/
/*             },*/
/*             input: {*/
/*                 class:  'form-control',*/
/*                 id:     uid,*/
/*                 name:   key ~ '[' ~ aid ~ ']',*/
/*                 type:   'text',*/
/*                 value:  image[aid]|default(''),*/
/*             }*/
/*         }]) %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% block fieldset_type 'image' %}*/
/* {% block fieldset_widget 'fieldImage' %}*/
/* */
/* {% block fieldset_label_text  labelkey %}*/
/* {% block fieldset_label_info  option.info %}*/
/* {% block fieldset_label_class 'col-xs-12 control-label' %}*/
/* */
/* {% block fieldset_controls %}*/
/*     <div class="col-xs-12 dropzone">*/
/*         <div class="row">*/
/*             <div class="col-xs-8">*/
/*                 {# Path #}*/
/*                 <div class="form-group">*/
/*                     <div class="col-sm-12">*/
/*                         <label{{ hattr(hattr.path_label) }}>{{ __('general.phrase.path-image-file') }}</label><input{{ hattr(hattr.path) }}>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {# Attribute fields #}*/
/*                 {% for afield in attribute_fields %}*/
/*                     <div class="form-group">*/
/*                         <div class="col-sm-2">*/
/*                             <label{{ hattr(afield.label) }}>{{ afield.title }}</label>*/
/*                         </div>*/
/*                         <div class="col-sm-10">*/
/*                             <input{{ hattr(afield.input) }}>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 {# Progressbar #}*/
/*                 <div class="buic-progress" data-bolt-widget="buicProgress"></div>*/
/* */
/*                 {# Uploadbuttons #}*/
/*                 {{ macro.upload_buttons('image', hattr.upload, option.upload, context.can.upload and option.can_upload, false) }}*/
/*             </div>*/
/* */
/*             {# Preview #}*/
/*             <div class="col-xs-4">*/
/*                 <div class="right-on-large">*/
/*                     <label>{{ __('general.phrase.preview') }}</label>*/
/*                     <div class="content-preview imageholder">*/
/*                         <img{{ hattr(hattr.preview) }}>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fieldset_controls %}*/
/* */
