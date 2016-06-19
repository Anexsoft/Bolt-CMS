<?php

/* @bolt/editcontent/fields/_templateselect.twig */
class __TwigTemplate_9062c44cd0055df4dc3604828d079f9810c9ad9c6035f092b52229d3fed60452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 31
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_templateselect.twig", 31);
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
        $__internal_1527e558308bf61bb4ff1b0798cba452d2ac7d69d2f08efa16356d66ac29a615 = $this->env->getExtension("native_profiler");
        $__internal_1527e558308bf61bb4ff1b0798cba452d2ac7d69d2f08efa16356d66ac29a615->enter($__internal_1527e558308bf61bb4ff1b0798cba452d2ac7d69d2f08efa16356d66ac29a615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_templateselect.twig"));

        // line 3
        $context["option"] = array("filter" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "filter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array()), array())) : (array())), "label" => $this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array()), "info" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")));
        // line 12
        $context["options"] = array();
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listTemplates($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "filter", array())));
        foreach ($context['_seq'] as $context["filename"] => $context["name"]) {
            // line 14
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array(0 => array("value" =>             // line 15
$context["filename"], "text" => (            // line 16
$context["name"] . ((twig_in_filter($context["filename"], $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtemplates", array()))) ? (" (+)") : (""))), "selected" => ($this->getAttribute($this->getAttribute(            // line 17
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method") == $context["filename"]))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filename'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        $context["buic_opt_select"] = array("clear" => true, "id" =>         // line 24
(isset($context["key"]) ? $context["key"] : null), "name" =>         // line 25
(isset($context["name"]) ? $context["name"] : null), "options" =>         // line 26
(isset($context["options"]) ? $context["options"] : null));
        // line 33
        $context["fieldset_conf"] = array("currentHas" => $this->getAttribute($this->getAttribute(        // line 34
(isset($context["context"]) ? $context["context"] : null), "has", array()), "templatefields", array()), "current" => $this->getAttribute($this->getAttribute(        // line 35
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "fieldTemplates" => $this->getAttribute(        // line 36
(isset($context["context"]) ? $context["context"] : null), "fieldtemplates", array()));
        // line 31
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1527e558308bf61bb4ff1b0798cba452d2ac7d69d2f08efa16356d66ac29a615->leave($__internal_1527e558308bf61bb4ff1b0798cba452d2ac7d69d2f08efa16356d66ac29a615_prof);

    }

    // line 39
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_a5d9e00493a5a81e9ad675699fab6076edbf4110bde8080321ddcf2730831b6b = $this->env->getExtension("native_profiler");
        $__internal_a5d9e00493a5a81e9ad675699fab6076edbf4110bde8080321ddcf2730831b6b->enter($__internal_a5d9e00493a5a81e9ad675699fab6076edbf4110bde8080321ddcf2730831b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "templateselect";
        
        $__internal_a5d9e00493a5a81e9ad675699fab6076edbf4110bde8080321ddcf2730831b6b->leave($__internal_a5d9e00493a5a81e9ad675699fab6076edbf4110bde8080321ddcf2730831b6b_prof);

    }

    // line 40
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_606901ea2daeb2348ba4dacd9ab1ff6973146d4121280c0e7850175ce2f9cc64 = $this->env->getExtension("native_profiler");
        $__internal_606901ea2daeb2348ba4dacd9ab1ff6973146d4121280c0e7850175ce2f9cc64->enter($__internal_606901ea2daeb2348ba4dacd9ab1ff6973146d4121280c0e7850175ce2f9cc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldTemplateselect";
        
        $__internal_606901ea2daeb2348ba4dacd9ab1ff6973146d4121280c0e7850175ce2f9cc64->leave($__internal_606901ea2daeb2348ba4dacd9ab1ff6973146d4121280c0e7850175ce2f9cc64_prof);

    }

    // line 42
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_96f09f9e153fcc5162afb7fe54fc971fb40321f126e9f26ae79c4403653cf763 = $this->env->getExtension("native_profiler");
        $__internal_96f09f9e153fcc5162afb7fe54fc971fb40321f126e9f26ae79c4403653cf763->enter($__internal_96f09f9e153fcc5162afb7fe54fc971fb40321f126e9f26ae79c4403653cf763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : null), "html", null, true);
        
        $__internal_96f09f9e153fcc5162afb7fe54fc971fb40321f126e9f26ae79c4403653cf763->leave($__internal_96f09f9e153fcc5162afb7fe54fc971fb40321f126e9f26ae79c4403653cf763_prof);

    }

    // line 43
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        $__internal_d1c256fce4294e506eadbd01c32f76a6a872185c39e122a0563df237bca2e0cd = $this->env->getExtension("native_profiler");
        $__internal_d1c256fce4294e506eadbd01c32f76a6a872185c39e122a0563df237bca2e0cd->enter($__internal_d1c256fce4294e506eadbd01c32f76a6a872185c39e122a0563df237bca2e0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_info"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array()), "html", null, true);
        
        $__internal_d1c256fce4294e506eadbd01c32f76a6a872185c39e122a0563df237bca2e0cd->leave($__internal_d1c256fce4294e506eadbd01c32f76a6a872185c39e122a0563df237bca2e0cd_prof);

    }

    // line 44
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_10197978999851b978765bea1c94b7c9178769a7d1c6e1472ca44b6c4b7090eb = $this->env->getExtension("native_profiler");
        $__internal_10197978999851b978765bea1c94b7c9178769a7d1c6e1472ca44b6c4b7090eb->enter($__internal_10197978999851b978765bea1c94b7c9178769a7d1c6e1472ca44b6c4b7090eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-sm-3";
        
        $__internal_10197978999851b978765bea1c94b7c9178769a7d1c6e1472ca44b6c4b7090eb->leave($__internal_10197978999851b978765bea1c94b7c9178769a7d1c6e1472ca44b6c4b7090eb_prof);

    }

    // line 45
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        $__internal_966646d3a20d724be967cbb21d282dc3de1595bec316e817739ec229ad629220 = $this->env->getExtension("native_profiler");
        $__internal_966646d3a20d724be967cbb21d282dc3de1595bec316e817739ec229ad629220->enter($__internal_966646d3a20d724be967cbb21d282dc3de1595bec316e817739ec229ad629220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_for"));

        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        
        $__internal_966646d3a20d724be967cbb21d282dc3de1595bec316e817739ec229ad629220->leave($__internal_966646d3a20d724be967cbb21d282dc3de1595bec316e817739ec229ad629220_prof);

    }

    // line 47
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_18b361dfe9a4f1f1391d6c6fd2bdba747e9ef9f050c189e67d1aaba319d7df7a = $this->env->getExtension("native_profiler");
        $__internal_18b361dfe9a4f1f1391d6c6fd2bdba747e9ef9f050c189e67d1aaba319d7df7a->enter($__internal_18b361dfe9a4f1f1391d6c6fd2bdba747e9ef9f050c189e67d1aaba319d7df7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 48
        echo "    ";
        $context["__internal_90a4e80f8446f1efae49c6a44441db5c6c2e8282a942decb0d8f608acdd8df0f"] = $this->loadTemplate("@bolt/_buic/_select.twig", "@bolt/editcontent/fields/_templateselect.twig", 48);
        // line 49
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 51
        echo $context["__internal_90a4e80f8446f1efae49c6a44441db5c6c2e8282a942decb0d8f608acdd8df0f"]->getbuic_select((isset($context["buic_opt_select"]) ? $context["buic_opt_select"] : null));
        echo "
    </div>
    <div class=\"hidden col-sm-9 col-sm-offset-3\">
        <p class=\"form-control-static\"></p>
    </div>
";
        
        $__internal_18b361dfe9a4f1f1391d6c6fd2bdba747e9ef9f050c189e67d1aaba319d7df7a->leave($__internal_18b361dfe9a4f1f1391d6c6fd2bdba747e9ef9f050c189e67d1aaba319d7df7a_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_templateselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 51,  152 => 49,  149 => 48,  143 => 47,  131 => 45,  119 => 44,  107 => 43,  95 => 42,  83 => 40,  71 => 39,  64 => 31,  62 => 36,  61 => 35,  60 => 34,  59 => 33,  57 => 26,  56 => 25,  55 => 24,  54 => 22,  48 => 17,  47 => 16,  46 => 15,  45 => 14,  41 => 13,  39 => 12,  37 => 6,  36 => 5,  35 => 4,  34 => 3,  11 => 31,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* */
/* {% set option = {*/
/*     filter:  field.filter|default({}),*/
/*     label:   field.label,*/
/*     info:    field.info|default('')*/
/* } %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {# Build the select options array #}*/
/* {% set options = [] %}*/
/* {% for filename, name in listtemplates(option.filter) %}*/
/*     {% set options = options|merge([{*/
/*         value:     filename,*/
/*         text:      name ~ (filename in context.fieldtemplates ? ' (+)' : ''),*/
/*         selected:  context.content.get(contentkey) == filename,*/
/*     }]) %}*/
/* {% endfor %}*/
/* */
/* {# BUIC options #}*/
/* {% set buic_opt_select = {*/
/*     'clear':    true,*/
/*     'id':       key,*/
/*     'name':     name,*/
/*     'options':  options,*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% set fieldset_conf = {*/
/*     'currentHas':       context.has.templatefields,*/
/*     'current':          context.content.get(contentkey),*/
/*     'fieldTemplates':   context.fieldtemplates*/
/* }%}*/
/* */
/* {% block fieldset_type 'templateselect' %}*/
/* {% block fieldset_widget 'fieldTemplateselect' %}*/
/* */
/* {% block fieldset_label_text  labelkey %}*/
/* {% block fieldset_label_info  option.info %}*/
/* {% block fieldset_label_class 'col-sm-3' %}*/
/* {% block fieldset_label_for   key %}*/
/* */
/* {% block fieldset_controls %}*/
/*     {% from '@bolt/_buic/_select.twig' import buic_select %}*/
/* */
/*     <div class="col-sm-9">*/
/*         {{ buic_select(buic_opt_select) }}*/
/*     </div>*/
/*     <div class="hidden col-sm-9 col-sm-offset-3">*/
/*         <p class="form-control-static"></p>*/
/*     </div>*/
/* {% endblock fieldset_controls %}*/
/* */
