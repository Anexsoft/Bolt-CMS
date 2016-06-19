<?php

/* @bolt/editcontent/fields/_video.twig */
class __TwigTemplate_2f7a2eca3ebf8f879e3105f7864562585317839c704ec9a3effb31e5d4503c12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 109
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_video.twig", 109);
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
        $__internal_7675829b625d4f7da1b085fd2e3a19c63446d4622749eba34f8208a197737bcc = $this->env->getExtension("native_profiler");
        $__internal_7675829b625d4f7da1b085fd2e3a19c63446d4622749eba34f8208a197737bcc->enter($__internal_7675829b625d4f7da1b085fd2e3a19c63446d4622749eba34f8208a197737bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_video.twig"));

        // line 3
        $context["option"] = array("label" => $this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "label", array()), "info" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.upload.video")) : ("info.upload.video")));
        // line 10
        $context["preview_w"] = 200;
        // line 11
        $context["preview_h"] = 150;
        // line 13
        $context["video"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method");
        // line 15
        $context["attributes"] = array("url" => array("class" => "form-control url", "id" => $this->env->getExtension('Bolt')->buid(), "name" => (        // line 19
(isset($context["name"]) ? $context["name"] : null) . "[url]"), "placeholder" => ($this->env->getExtension('Bolt')->trans("field.video.placeholder.url") . " …"), "type" => "url", "value" => (($this->getAttribute(        // line 22
(isset($context["video"]) ? $context["video"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url", array()), "")) : (""))), "width" => array("class" => "form-control width", "id" => $this->env->getExtension('Bolt')->buid(), "name" => (        // line 28
(isset($context["name"]) ? $context["name"] : null) . "[width]"), "type" => "number", "value" => (($this->getAttribute(        // line 30
(isset($context["video"]) ? $context["video"] : null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "width", array()), "")) : (""))), "height" => array("class" => "form-control height", "id" => $this->env->getExtension('Bolt')->buid(), "name" => (        // line 36
(isset($context["name"]) ? $context["name"] : null) . "[height]"), "type" => "number", "value" => (($this->getAttribute(        // line 38
(isset($context["video"]) ? $context["video"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "height", array()), "")) : (""))), "hid_ratio" => array("class" => "ratio", "name" => (        // line 43
(isset($context["name"]) ? $context["name"] : null) . "[ratio]"), "type" => "hidden", "value" => (($this->getAttribute(        // line 45
(isset($context["video"]) ? $context["video"] : null), "ratio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "ratio", array()), "")) : (""))), "hid_title" => array("class" => "form-control title", "name" => (        // line 50
(isset($context["name"]) ? $context["name"] : null) . "[title]"), "readonly" => true, "title" => $this->env->getExtension('Bolt')->trans("Title"), "type" => "text", "value" => (($this->getAttribute(        // line 54
(isset($context["video"]) ? $context["video"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array()), "")) : (""))), "hid_authorname" => array("class" => "form-control authorname", "name" => (        // line 59
(isset($context["name"]) ? $context["name"] : null) . "[authorname]"), "readonly" => true, "title" => $this->env->getExtension('Bolt')->trans("general.phrase.author"), "type" => "text", "value" => (($this->getAttribute(        // line 63
(isset($context["video"]) ? $context["video"] : null), "authorname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname", array()), "")) : (""))), "hid_authorurl" => array("class" => "authorurl", "name" => (        // line 68
(isset($context["name"]) ? $context["name"] : null) . "[authorurl]"), "type" => "hidden", "value" => (($this->getAttribute(        // line 70
(isset($context["video"]) ? $context["video"] : null), "authorurl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorurl", array()), "")) : (""))), "hid_html" => array("class" => "html", "name" => (        // line 75
(isset($context["name"]) ? $context["name"] : null) . "[html]"), "type" => "hidden", "value" => (($this->getAttribute(        // line 77
(isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) ? (twig_replace_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array()), array("\"" => "'"))) : (""))), "hid_thumbnail" => array("class" => "thumbnailurl", "name" => (        // line 82
(isset($context["name"]) ? $context["name"] : null) . "[thumbnail]"), "type" => "hidden", "value" => (($this->getAttribute(        // line 84
(isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array()), "")) : (""))), "preview" => array("alt" => $this->env->getExtension('Bolt')->trans("field.video.label.preview"), "height" =>         // line 89
(isset($context["preview_h"]) ? $context["preview_h"] : null), "src" => (($this->getAttribute(        // line 90
(isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array()), $this->env->getExtension('asset')->getAssetUrl("img/default_empty_4x3.png", "bolt"))) : ($this->env->getExtension('asset')->getAssetUrl("img/default_empty_4x3.png", "bolt"))), "width" =>         // line 91
(isset($context["preview_w"]) ? $context["preview_w"] : null)), "play" => array("class" => (((($this->getAttribute(        // line 95
(isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array()))) : (""))) ? ("") : ("hidden")), "type" => "button", "role" => "button"), "refresh" => array("class" => "btn btn-default refresh", "type" => "button", "disabled" => ((((twig_length_filter($this->env, (($this->getAttribute(        // line 103
(isset($context["video"]) ? $context["video"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url", array()), "")) : (""))) <= 2) || (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array()))) : ("")))) ? (true) : (false))));
        // line 109
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7675829b625d4f7da1b085fd2e3a19c63446d4622749eba34f8208a197737bcc->leave($__internal_7675829b625d4f7da1b085fd2e3a19c63446d4622749eba34f8208a197737bcc_prof);

    }

    // line 111
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_5a69df0c422ba2360c2f9d953498848b8d0a2ab4f82db5df6120551144429c96 = $this->env->getExtension("native_profiler");
        $__internal_5a69df0c422ba2360c2f9d953498848b8d0a2ab4f82db5df6120551144429c96->enter($__internal_5a69df0c422ba2360c2f9d953498848b8d0a2ab4f82db5df6120551144429c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "video";
        
        $__internal_5a69df0c422ba2360c2f9d953498848b8d0a2ab4f82db5df6120551144429c96->leave($__internal_5a69df0c422ba2360c2f9d953498848b8d0a2ab4f82db5df6120551144429c96_prof);

    }

    // line 112
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_2b04783a1577765127b60438d16f3b809f08e787ecaad6ebe2adda3c613d00de = $this->env->getExtension("native_profiler");
        $__internal_2b04783a1577765127b60438d16f3b809f08e787ecaad6ebe2adda3c613d00de->enter($__internal_2b04783a1577765127b60438d16f3b809f08e787ecaad6ebe2adda3c613d00de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldVideo";
        
        $__internal_2b04783a1577765127b60438d16f3b809f08e787ecaad6ebe2adda3c613d00de->leave($__internal_2b04783a1577765127b60438d16f3b809f08e787ecaad6ebe2adda3c613d00de_prof);

    }

    // line 114
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_6cb871930ca98b1f573b375d771195fc773f79dfad6e64224bdd75824a3b1fcd = $this->env->getExtension("native_profiler");
        $__internal_6cb871930ca98b1f573b375d771195fc773f79dfad6e64224bdd75824a3b1fcd->enter($__internal_6cb871930ca98b1f573b375d771195fc773f79dfad6e64224bdd75824a3b1fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : null), "html", null, true);
        
        $__internal_6cb871930ca98b1f573b375d771195fc773f79dfad6e64224bdd75824a3b1fcd->leave($__internal_6cb871930ca98b1f573b375d771195fc773f79dfad6e64224bdd75824a3b1fcd_prof);

    }

    // line 115
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_ea00db0dc9fb21abbbffcdb9661079fda81b8f7576d53a1ead0d007309735188 = $this->env->getExtension("native_profiler");
        $__internal_ea00db0dc9fb21abbbffcdb9661079fda81b8f7576d53a1ead0d007309735188->enter($__internal_ea00db0dc9fb21abbbffcdb9661079fda81b8f7576d53a1ead0d007309735188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array()), "html", null, true);
        
        $__internal_ea00db0dc9fb21abbbffcdb9661079fda81b8f7576d53a1ead0d007309735188->leave($__internal_ea00db0dc9fb21abbbffcdb9661079fda81b8f7576d53a1ead0d007309735188_prof);

    }

    // line 116
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_ba9ef1caa18cf36bf0b63d0ab38ab95c77e5f20f5d6a18b7d3debd67894f9c8e = $this->env->getExtension("native_profiler");
        $__internal_ba9ef1caa18cf36bf0b63d0ab38ab95c77e5f20f5d6a18b7d3debd67894f9c8e->enter($__internal_ba9ef1caa18cf36bf0b63d0ab38ab95c77e5f20f5d6a18b7d3debd67894f9c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-xs-12";
        
        $__internal_ba9ef1caa18cf36bf0b63d0ab38ab95c77e5f20f5d6a18b7d3debd67894f9c8e->leave($__internal_ba9ef1caa18cf36bf0b63d0ab38ab95c77e5f20f5d6a18b7d3debd67894f9c8e_prof);

    }

    // line 118
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_147236d51aaea5dbdddb619db30306ccfd81c5159db2202c4b48e6d3d033cb95 = $this->env->getExtension("native_profiler");
        $__internal_147236d51aaea5dbdddb619db30306ccfd81c5159db2202c4b48e6d3d033cb95->enter($__internal_147236d51aaea5dbdddb619db30306ccfd81c5159db2202c4b48e6d3d033cb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 119
        echo "    <div class=\"col-sm-8\">
        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label for=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "url", array()), "id", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("field.video.label.url");
        echo "</label>
                <div class=\"input-group\">
                    <input";
        // line 124
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "url", array()));
        echo ">
                    <span class=\"input-group-btn\">
                        <button";
        // line 126
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "refresh", array()));
        echo "><i class=\"fa fa-refresh\"></i></button>
                    </span>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-sm-2\">";
        // line 133
        echo $this->env->getExtension('Bolt')->trans("field.video.label.size");
        echo "</label>
            <div class=\"col-sm-10 form-inline\">
                <label for=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "width", array()), "id", array()), "html", null, true);
        echo "\" class=\"sr-only\">";
        echo $this->env->getExtension('Bolt')->trans("field.video.width");
        echo "</label>
                <input";
        // line 136
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "width", array()));
        echo "> ×
                <label for=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "height", array()), "id", array()), "html", null, true);
        echo "\" class=\"sr-only\">";
        echo $this->env->getExtension('Bolt')->trans("field.video.height");
        echo "</label>
                <input";
        // line 138
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "height", array()));
        echo ">
                <label class=\"label-pixels\">";
        // line 139
        echo $this->env->getExtension('Bolt')->trans("field.video.pixel");
        echo "</label>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                <label>";
        // line 145
        echo $this->env->getExtension('Bolt')->trans("field.video.matched-video");
        echo "</label>
                <input";
        // line 146
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hid_title", array()));
        echo ">
                <input";
        // line 147
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hid_authorname", array()));
        echo ">
            </div>

            <input";
        // line 150
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hid_ratio", array()));
        echo ">
            <input";
        // line 151
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hid_authorurl", array()));
        echo ">
            <input";
        // line 152
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hid_html", array()));
        echo ">
            <input";
        // line 153
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hid_thumbnail", array()));
        echo ">
        </div>
    </div>

    <div class=\"col-sm-4\">
        <div class=\"right-on-large\">
            <label>";
        // line 159
        echo $this->env->getExtension('Bolt')->trans("field.video.label.preview");
        echo "</label>
            <div class=\"imageholder\">
                <img";
        // line 161
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "preview", array()));
        echo ">
                <button";
        // line 162
        echo $this->env->getExtension('Bolt')->hattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "play", array()));
        echo "></button>
            </div>
        </div>
    </div>
";
        
        $__internal_147236d51aaea5dbdddb619db30306ccfd81c5159db2202c4b48e6d3d033cb95->leave($__internal_147236d51aaea5dbdddb619db30306ccfd81c5159db2202c4b48e6d3d033cb95_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_video.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 162,  242 => 161,  237 => 159,  228 => 153,  224 => 152,  220 => 151,  216 => 150,  210 => 147,  206 => 146,  202 => 145,  193 => 139,  189 => 138,  183 => 137,  179 => 136,  173 => 135,  168 => 133,  158 => 126,  153 => 124,  146 => 122,  141 => 119,  135 => 118,  123 => 116,  111 => 115,  99 => 114,  87 => 112,  75 => 111,  68 => 109,  66 => 103,  65 => 95,  64 => 91,  63 => 90,  62 => 89,  61 => 84,  60 => 82,  59 => 77,  58 => 75,  57 => 70,  56 => 68,  55 => 63,  54 => 59,  53 => 54,  52 => 50,  51 => 45,  50 => 43,  49 => 38,  48 => 36,  47 => 30,  46 => 28,  45 => 22,  44 => 19,  43 => 15,  41 => 13,  39 => 11,  37 => 10,  35 => 5,  34 => 4,  33 => 3,  11 => 109,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* */
/* {% set option = {*/
/*     label:  field.label,*/
/*     info:   field.info|default('info.upload.video'),*/
/* } %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set preview_w = 200 %}*/
/* {% set preview_h = 150 %}*/
/* */
/* {% set video = context.content.get(contentkey) %}*/
/* */
/* {% set attributes = {*/
/*     url: {*/
/*         class:        'form-control url',*/
/*         id:           buid(),*/
/*         name:         name ~ '[url]',*/
/*         placeholder:  __('field.video.placeholder.url') ~ ' …',*/
/*         type:         'url',*/
/*         value:        video.url|default('')*/
/*     },*/
/* */
/*     width: {*/
/*         class:      'form-control width',*/
/*         id:         buid(),*/
/*         name:       name ~ '[width]',*/
/*         type:       'number',*/
/*         value:      video.width|default('')*/
/*     },*/
/* */
/*     height: {*/
/*         class:      'form-control height',*/
/*         id:         buid(),*/
/*         name:       name ~ '[height]',*/
/*         type:       'number',*/
/*         value:      video.height|default('')*/
/*     },*/
/* */
/*     hid_ratio: {*/
/*         class:      'ratio',*/
/*         name:       name ~ '[ratio]',*/
/*         type:       'hidden',*/
/*         value:      video.ratio|default('')*/
/*     },*/
/* */
/*     hid_title: {*/
/*         class:      'form-control title',*/
/*         name:       name ~ '[title]',*/
/*         readonly:   true,*/
/*         title:      __('Title'),*/
/*         type:       'text',*/
/*         value:      video.title|default('')*/
/*     },*/
/* */
/*     hid_authorname: {*/
/*         class:      'form-control authorname',*/
/*         name:       name ~ '[authorname]',*/
/*         readonly:   true,*/
/*         title:      __('general.phrase.author'),*/
/*         type:       'text',*/
/*         value:      video.authorname|default(''),*/
/*     },*/
/* */
/*     hid_authorurl: {*/
/*         class:      'authorurl',*/
/*         name:       name ~ '[authorurl]',*/
/*         type:       'hidden',*/
/*         value:      video.authorurl|default(''),*/
/*     },*/
/* */
/*     hid_html: {*/
/*         class:      'html',*/
/*         name:       name ~ '[html]',*/
/*         type:       'hidden',*/
/*         value:      (video.html is defined ? video.html|replace({'"': '\''}) : '')*/
/*     },*/
/* */
/*     hid_thumbnail: {*/
/*         class:      'thumbnailurl',*/
/*         name:       name ~ '[thumbnail]',*/
/*         type:       'hidden',*/
/*         value:      video.thumbnail|default(''),*/
/*     },*/
/* */
/*     preview: {*/
/*         alt:       __('field.video.label.preview'),*/
/*         height:    preview_h,*/
/*         src:       video.thumbnail|default(asset('img/default_empty_4x3.png', 'bolt')),*/
/*         width:     preview_w,*/
/*     },*/
/* */
/*     play: {*/
/*         class:     video.html|default() ? '' : 'hidden',*/
/*         type:      'button',*/
/*         role:      'button',*/
/*     },*/
/* */
/*     refresh: {*/
/*         class:     'btn btn-default refresh',*/
/*         type:      'button',*/
/*         disabled:  video.url|default('')|length <= 2 or video.html|default() ? true : false,*/
/*     },*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% block fieldset_type 'video' %}*/
/* {% block fieldset_widget 'fieldVideo' %}*/
/* */
/* {% block fieldset_label_text  labelkey %}*/
/* {% block fieldset_label_info  option.info %}*/
/* {% block fieldset_label_class 'col-xs-12' %}*/
/* */
/* {% block fieldset_controls %}*/
/*     <div class="col-sm-8">*/
/*         <div class="form-group">*/
/*             <div class="col-sm-12">*/
/*                 <label for="{{ attributes.url.id }}">{{ __('field.video.label.url') }}</label>*/
/*                 <div class="input-group">*/
/*                     <input{{ hattr(attributes.url) }}>*/
/*                     <span class="input-group-btn">*/
/*                         <button{{ hattr(attributes.refresh) }}><i class="fa fa-refresh"></i></button>*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-sm-2">{{ __('field.video.label.size') }}</label>*/
/*             <div class="col-sm-10 form-inline">*/
/*                 <label for="{{ attributes.width.id }}" class="sr-only">{{ __('field.video.width') }}</label>*/
/*                 <input{{ hattr(attributes.width) }}> ×*/
/*                 <label for="{{ attributes.height.id }}" class="sr-only">{{ __('field.video.height') }}</label>*/
/*                 <input{{ hattr(attributes.height) }}>*/
/*                 <label class="label-pixels">{{ __('field.video.pixel') }}</label>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-12">*/
/*                 <label>{{ __('field.video.matched-video') }}</label>*/
/*                 <input{{ hattr(attributes.hid_title) }}>*/
/*                 <input{{ hattr(attributes.hid_authorname) }}>*/
/*             </div>*/
/* */
/*             <input{{ hattr(attributes.hid_ratio) }}>*/
/*             <input{{ hattr(attributes.hid_authorurl) }}>*/
/*             <input{{ hattr(attributes.hid_html) }}>*/
/*             <input{{ hattr(attributes.hid_thumbnail) }}>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-sm-4">*/
/*         <div class="right-on-large">*/
/*             <label>{{ __('field.video.label.preview') }}</label>*/
/*             <div class="imageholder">*/
/*                 <img{{ hattr(attributes.preview) }}>*/
/*                 <button{{ hattr(attributes.play) }}></button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fieldset_controls %}*/
/* */
