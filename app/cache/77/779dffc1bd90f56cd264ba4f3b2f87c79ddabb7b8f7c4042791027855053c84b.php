<?php

/* @bolt/editcontent/fields/_categories.twig */
class __TwigTemplate_4899a49f39fad85f5dfc6e9c7afce72c0dc1427fbf7472ea28a8466fd5dfd098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_categories.twig", 25);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
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
        $__internal_a0553ca112519151d299808bdf90da53c3f5bd525e1ed2a4f0691b32e32c6186 = $this->env->getExtension("native_profiler");
        $__internal_a0553ca112519151d299808bdf90da53c3f5bd525e1ed2a4f0691b32e32c6186->enter($__internal_a0553ca112519151d299808bdf90da53c3f5bd525e1ed2a4f0691b32e32c6186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_categories.twig"));

        // line 4
        $context["options"] = array();
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()));
        foreach ($context['_seq'] as $context["slug"] => $context["cat"]) {
            // line 6
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array(0 => array("value" =>             // line 7
$context["slug"], "text" =>             // line 8
$context["cat"], "selected" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 9
(isset($context["context"]) ? $context["context"] : null), "content", array()), "taxonomy", array()), "containsKeyValue", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), 1 => $context["slug"]), "method"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context["buic_opt_select"] = array("all" => (($this->getAttribute(        // line 15
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array()), false)) : (false)), "clear" => true, "id" => ("taxonomy-" . $this->getAttribute(        // line 17
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())), "multiple" => (($this->getAttribute(        // line 18
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "multiple", array()), false)) : (false)), "name" => (("taxonomy[" . $this->getAttribute(        // line 19
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())) . "][]"), "options" =>         // line 20
(isset($context["options"]) ? $context["options"] : null));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0553ca112519151d299808bdf90da53c3f5bd525e1ed2a4f0691b32e32c6186->leave($__internal_a0553ca112519151d299808bdf90da53c3f5bd525e1ed2a4f0691b32e32c6186_prof);

    }

    // line 27
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_589465034587dcccde764cb4fc507868858bbe99803527fc18d37f408fd381b7 = $this->env->getExtension("native_profiler");
        $__internal_589465034587dcccde764cb4fc507868858bbe99803527fc18d37f408fd381b7->enter($__internal_589465034587dcccde764cb4fc507868858bbe99803527fc18d37f408fd381b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "categories";
        
        $__internal_589465034587dcccde764cb4fc507868858bbe99803527fc18d37f408fd381b7->leave($__internal_589465034587dcccde764cb4fc507868858bbe99803527fc18d37f408fd381b7_prof);

    }

    // line 28
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_0123755e863ecbccc3c6118f30adb40b3b93735cd0407c933f4fac0d3774f9a4 = $this->env->getExtension("native_profiler");
        $__internal_0123755e863ecbccc3c6118f30adb40b3b93735cd0407c933f4fac0d3774f9a4->enter($__internal_0123755e863ecbccc3c6118f30adb40b3b93735cd0407c933f4fac0d3774f9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldCategories";
        
        $__internal_0123755e863ecbccc3c6118f30adb40b3b93735cd0407c933f4fac0d3774f9a4->leave($__internal_0123755e863ecbccc3c6118f30adb40b3b93735cd0407c933f4fac0d3774f9a4_prof);

    }

    // line 30
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_17ef84504f9da2dc257837439ef2062639d4cdd929ee4d6c073b55d1d75ae04e = $this->env->getExtension("native_profiler");
        $__internal_17ef84504f9da2dc257837439ef2062639d4cdd929ee4d6c073b55d1d75ae04e->enter($__internal_17ef84504f9da2dc257837439ef2062639d4cdd929ee4d6c073b55d1d75ae04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name", array()), "html", null, true);
        
        $__internal_17ef84504f9da2dc257837439ef2062639d4cdd929ee4d6c073b55d1d75ae04e->leave($__internal_17ef84504f9da2dc257837439ef2062639d4cdd929ee4d6c073b55d1d75ae04e_prof);

    }

    // line 31
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_679373874ac8ae96977b652f851695c36fa9d4f3b3512f707e0022d4be97dbe4 = $this->env->getExtension("native_profiler");
        $__internal_679373874ac8ae96977b652f851695c36fa9d4f3b3512f707e0022d4be97dbe4->enter($__internal_679373874ac8ae96977b652f851695c36fa9d4f3b3512f707e0022d4be97dbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-sm-3";
        
        $__internal_679373874ac8ae96977b652f851695c36fa9d4f3b3512f707e0022d4be97dbe4->leave($__internal_679373874ac8ae96977b652f851695c36fa9d4f3b3512f707e0022d4be97dbe4_prof);

    }

    // line 32
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        $__internal_af9974d13989f34e79533ba0dbbc3457caa4c3e44361877eac7f619fc1f73003 = $this->env->getExtension("native_profiler");
        $__internal_af9974d13989f34e79533ba0dbbc3457caa4c3e44361877eac7f619fc1f73003->enter($__internal_af9974d13989f34e79533ba0dbbc3457caa4c3e44361877eac7f619fc1f73003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_for"));

        echo twig_escape_filter($this->env, ("taxonomy-" . $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())), "html", null, true);
        
        $__internal_af9974d13989f34e79533ba0dbbc3457caa4c3e44361877eac7f619fc1f73003->leave($__internal_af9974d13989f34e79533ba0dbbc3457caa4c3e44361877eac7f619fc1f73003_prof);

    }

    // line 34
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_d754696639fd3c3e823b2081419da8e5529d85273a44be8e20fedc063d8b257a = $this->env->getExtension("native_profiler");
        $__internal_d754696639fd3c3e823b2081419da8e5529d85273a44be8e20fedc063d8b257a->enter($__internal_d754696639fd3c3e823b2081419da8e5529d85273a44be8e20fedc063d8b257a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 35
        echo "    ";
        $context["__internal_b1cda5ae47a9d56b8df27ade106689fc8b337bb862011f0da1e175960176704e"] = $this->loadTemplate("@bolt/_buic/_select.twig", "@bolt/editcontent/fields/_categories.twig", 35);
        // line 36
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 38
        echo $context["__internal_b1cda5ae47a9d56b8df27ade106689fc8b337bb862011f0da1e175960176704e"]->getbuic_select((isset($context["buic_opt_select"]) ? $context["buic_opt_select"] : null));
        echo "
    </div>
";
        
        $__internal_d754696639fd3c3e823b2081419da8e5529d85273a44be8e20fedc063d8b257a->leave($__internal_d754696639fd3c3e823b2081419da8e5529d85273a44be8e20fedc063d8b257a_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  131 => 36,  128 => 35,  122 => 34,  110 => 32,  98 => 31,  86 => 30,  74 => 28,  62 => 27,  55 => 25,  53 => 20,  52 => 19,  51 => 18,  50 => 17,  49 => 15,  48 => 14,  42 => 9,  41 => 8,  40 => 7,  39 => 6,  35 => 5,  33 => 4,  11 => 25,);
    }
}
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {# Build the select options array #}*/
/* {% set options = [] %}*/
/* {% for slug, cat in taxonomy.options %}*/
/*     {% set options = options|merge([{*/
/*         value:     slug,*/
/*         text:      cat,*/
/*         selected:  context.content.taxonomy.containsKeyValue(taxonomy.slug, slug),*/
/*     }]) %}*/
/* {% endfor %}*/
/* */
/* {# BUIC options #}*/
/* {% set buic_opt_select = {*/
/*     'all':       taxonomy.multiple|default(false),*/
/*     'clear':     true,*/
/*     'id':        'taxonomy-' ~ taxonomy.slug,*/
/*     'multiple':  taxonomy.multiple|default(false),*/
/*     'name':      'taxonomy[' ~ taxonomy.slug ~ '][]',*/
/*     'options':   options,*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% block fieldset_type 'categories' %}*/
/* {% block fieldset_widget 'fieldCategories' %}*/
/* */
/* {% block fieldset_label_text  taxonomy.name %}*/
/* {% block fieldset_label_class 'col-sm-3' %}*/
/* {% block fieldset_label_for   'taxonomy-' ~ taxonomy.slug %}*/
/* */
/* {% block fieldset_controls %}*/
/*     {% from '@bolt/_buic/_select.twig' import buic_select %}*/
/* */
/*     <div class="col-sm-9">*/
/*         {{ buic_select(buic_opt_select) }}*/
/*     </div>*/
/* {% endblock fieldset_controls %}*/
/* */
