<?php

/* @bolt/editcontent/fields/_tags.twig */
class __TwigTemplate_e6d2deccba73643c54504b7bf9a7b84e3eaa8c54cc2d564790ca531ef3a86372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_tags.twig", 24);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
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
        $__internal_6ae8e2dd32105d1a4e53ca5be703c6f308f5be03c371c61d9700b2b730bd388f = $this->env->getExtension("native_profiler");
        $__internal_6ae8e2dd32105d1a4e53ca5be703c6f308f5be03c371c61d9700b2b730bd388f->enter($__internal_6ae8e2dd32105d1a4e53ca5be703c6f308f5be03c371c61d9700b2b730bd388f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_tags.twig"));

        // line 4
        $context["options"] = array();
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())), "method"), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 6
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array(0 => array("value" => $this->getAttribute(            // line 7
$context["tag"], "slug", array()), "text" => $this->getAttribute(            // line 8
$context["tag"], "name", array()), "selected" => true)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context["buic_opt_select"] = array("clear" => true, "id" => ("taxonomy-" . $this->getAttribute(        // line 16
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())), "multiple" => true, "name" => (("taxonomy[" . $this->getAttribute(        // line 18
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())) . "][]"), "options" =>         // line 19
(isset($context["options"]) ? $context["options"] : null));
        // line 29
        $context["fieldset_conf"] = array("slug" => $this->getAttribute(        // line 30
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "allowSpaces" => $this->getAttribute(        // line 31
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "allow_spaces", array()));
        // line 24
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae8e2dd32105d1a4e53ca5be703c6f308f5be03c371c61d9700b2b730bd388f->leave($__internal_6ae8e2dd32105d1a4e53ca5be703c6f308f5be03c371c61d9700b2b730bd388f_prof);

    }

    // line 26
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_a1be69e22235cfa4cfa0d137be6d10dabac72dc9bd76f7f38d274d8c293a0304 = $this->env->getExtension("native_profiler");
        $__internal_a1be69e22235cfa4cfa0d137be6d10dabac72dc9bd76f7f38d274d8c293a0304->enter($__internal_a1be69e22235cfa4cfa0d137be6d10dabac72dc9bd76f7f38d274d8c293a0304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "tags";
        
        $__internal_a1be69e22235cfa4cfa0d137be6d10dabac72dc9bd76f7f38d274d8c293a0304->leave($__internal_a1be69e22235cfa4cfa0d137be6d10dabac72dc9bd76f7f38d274d8c293a0304_prof);

    }

    // line 27
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_0d33a41e501c1c51d2ba529286316f460a3fe5d4cffdabb0f9a851bd30225cf6 = $this->env->getExtension("native_profiler");
        $__internal_0d33a41e501c1c51d2ba529286316f460a3fe5d4cffdabb0f9a851bd30225cf6->enter($__internal_0d33a41e501c1c51d2ba529286316f460a3fe5d4cffdabb0f9a851bd30225cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldTags";
        
        $__internal_0d33a41e501c1c51d2ba529286316f460a3fe5d4cffdabb0f9a851bd30225cf6->leave($__internal_0d33a41e501c1c51d2ba529286316f460a3fe5d4cffdabb0f9a851bd30225cf6_prof);

    }

    // line 34
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_6c89be2f38ea819e0f01e1be14a314b14f413e5b892f7484e144ca7efc2ea401 = $this->env->getExtension("native_profiler");
        $__internal_6c89be2f38ea819e0f01e1be14a314b14f413e5b892f7484e144ca7efc2ea401->enter($__internal_6c89be2f38ea819e0f01e1be14a314b14f413e5b892f7484e144ca7efc2ea401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name", array()), "html", null, true);
        
        $__internal_6c89be2f38ea819e0f01e1be14a314b14f413e5b892f7484e144ca7efc2ea401->leave($__internal_6c89be2f38ea819e0f01e1be14a314b14f413e5b892f7484e144ca7efc2ea401_prof);

    }

    // line 35
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_644477b6c1bb7d49d82bc2473b654b8588a6701bcac5c895c3de3d870f804444 = $this->env->getExtension("native_profiler");
        $__internal_644477b6c1bb7d49d82bc2473b654b8588a6701bcac5c895c3de3d870f804444->enter($__internal_644477b6c1bb7d49d82bc2473b654b8588a6701bcac5c895c3de3d870f804444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-sm-3";
        
        $__internal_644477b6c1bb7d49d82bc2473b654b8588a6701bcac5c895c3de3d870f804444->leave($__internal_644477b6c1bb7d49d82bc2473b654b8588a6701bcac5c895c3de3d870f804444_prof);

    }

    // line 37
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_251ad33d1f5dc3f397252f1f0fe61128e9f7c0ea81874bdfccdff0442bc4c100 = $this->env->getExtension("native_profiler");
        $__internal_251ad33d1f5dc3f397252f1f0fe61128e9f7c0ea81874bdfccdff0442bc4c100->enter($__internal_251ad33d1f5dc3f397252f1f0fe61128e9f7c0ea81874bdfccdff0442bc4c100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 38
        echo "    ";
        $context["__internal_1702fc3f1c2cb3107a3ce6e890c6e659c221e8f82d2d02095881de764dae09ce"] = $this->loadTemplate("@bolt/_buic/_select.twig", "@bolt/editcontent/fields/_tags.twig", 38);
        // line 39
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 41
        echo $context["__internal_1702fc3f1c2cb3107a3ce6e890c6e659c221e8f82d2d02095881de764dae09ce"]->getbuic_select((isset($context["buic_opt_select"]) ? $context["buic_opt_select"] : null));
        echo "
        ";
        // line 42
        if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "tagcloud", array())) {
            // line 43
            echo "            <div class=\"tagcloud\"></div>
        ";
        }
        // line 45
        echo "    </div>
";
        
        $__internal_251ad33d1f5dc3f397252f1f0fe61128e9f7c0ea81874bdfccdff0442bc4c100->leave($__internal_251ad33d1f5dc3f397252f1f0fe61128e9f7c0ea81874bdfccdff0442bc4c100_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 45,  129 => 43,  127 => 42,  123 => 41,  119 => 39,  116 => 38,  110 => 37,  98 => 35,  86 => 34,  74 => 27,  62 => 26,  55 => 24,  53 => 31,  52 => 30,  51 => 29,  49 => 19,  48 => 18,  47 => 16,  46 => 14,  40 => 8,  39 => 7,  38 => 6,  34 => 5,  32 => 4,  11 => 24,);
    }
}
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {# Build the select options array #}*/
/* {% set options = [] %}*/
/* {% for tag in context.content.get(taxonomy.slug)|default([]) %}*/
/*     {% set options = options|merge([{*/
/*         value:     tag.slug,*/
/*         text:      tag.name,*/
/*         selected:  true,*/
/*     }]) %}*/
/* {% endfor %}*/
/* */
/* {# BUIC options #}*/
/* {% set buic_opt_select = {*/
/*     'clear':     true,*/
/*     'id':        'taxonomy-' ~ taxonomy.slug,*/
/*     'multiple':  true,*/
/*     'name':      'taxonomy[' ~ taxonomy.slug ~ '][]',*/
/*     'options':   options,*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% block fieldset_type 'tags' %}*/
/* {% block fieldset_widget 'fieldTags' %}*/
/* */
/* {% set fieldset_conf = {*/
/*     slug: taxonomy.slug,*/
/*     allowSpaces: taxonomy.allow_spaces,*/
/* }%}*/
/* */
/* {% block fieldset_label_text  taxonomy.name %}*/
/* {% block fieldset_label_class 'col-sm-3' %}*/
/* */
/* {% block fieldset_controls %}*/
/*     {% from '@bolt/_buic/_select.twig' import buic_select %}*/
/* */
/*     <div class="col-sm-9">*/
/*         {{ buic_select(buic_opt_select) }}*/
/*         {% if taxonomy.tagcloud %}*/
/*             <div class="tagcloud"></div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock fieldset_controls %}*/
/* */
