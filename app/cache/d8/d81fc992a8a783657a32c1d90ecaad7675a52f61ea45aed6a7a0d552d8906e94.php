<?php

/* @bolt/_base/_fieldset.twig */
class __TwigTemplate_d6c31fb444c2443c694fbc696e40cdbcd107296d72221878a89c5e4ca408d254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c478bf54338ced4c1cc46c13456e4d626d5954c4d5b9a4fb0278684d3246286 = $this->env->getExtension("native_profiler");
        $__internal_4c478bf54338ced4c1cc46c13456e4d626d5954c4d5b9a4fb0278684d3246286->enter($__internal_4c478bf54338ced4c1cc46c13456e4d626d5954c4d5b9a4fb0278684d3246286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_fieldset.twig"));

        // line 1
        $context["__internal_484f17a03bba2d52ce0c9d2c6f175b700f91ac205522139bf27246746f68658c"] = $this->loadTemplate("@bolt/_buic/_info.twig", "@bolt/_base/_fieldset.twig", 1);
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $context["widget_name"] = $this->renderBlock("fieldset_widget", $context, $blocks);
        // line 6
        echo "
";
        // line 7
        if ( !(isset($context["widget_name"]) ? $context["widget_name"] : null)) {
            // line 8
            echo "    ";
            $context["data_bolt_widget"] = "";
        } elseif (twig_test_iterable(((        // line 9
array_key_exists("fieldset_conf", $context)) ? (_twig_default_filter((isset($context["fieldset_conf"]) ? $context["fieldset_conf"] : null))) : ("")))) {
            // line 10
            echo "    ";
            $context["data_bolt_widget"] = twig_jsonencode_filter(array((isset($context["widget_name"]) ? $context["widget_name"] : null) => (isset($context["fieldset_conf"]) ? $context["fieldset_conf"] : null)));
        } else {
            // line 12
            echo "    ";
            $context["data_bolt_widget"] = (isset($context["widget_name"]) ? $context["widget_name"] : null);
        }
        // line 14
        echo "
";
        // line 15
        $context["attributes_fieldset"] = array("class" => ("form-group bolt-field-" . $this->renderBlock("fieldset_type", $context, $blocks)), "data-bolt-widget" =>         // line 17
(isset($context["data_bolt_widget"]) ? $context["data_bolt_widget"] : null));
        // line 19
        echo "
";
        // line 20
        $context["attributes_label"] = array("class" => (("main " . $this->renderBlock("fieldset_label_class", $context, $blocks)) . ((($this->renderBlock("fieldset_label_class", $context, $blocks) == "col-xs-12")) ? ("") : (" control-label"))), "for" => $this->renderBlock("fieldset_label_for", $context, $blocks));
        // line 24
        echo "
";
        // line 25
        if ($this->renderBlock("fieldset_label_info", $context, $blocks)) {
            // line 26
            echo "    ";
            $context["field_info"] = $context["__internal_484f17a03bba2d52ce0c9d2c6f175b700f91ac205522139bf27246746f68658c"]->getbuic_info($this->renderBlock("fieldset_label_text", $context, $blocks), $this->renderBlock("fieldset_label_info", $context, $blocks));
        }
        // line 28
        echo "
";
        // line 30
        echo "
<fieldset";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attributes_fieldset"]) ? $context["attributes_fieldset"] : null)), "method"), "html", null, true);
        echo ">
    <legend class=\"sr-only\">";
        // line 32
        $this->displayBlock('fieldset_label_text', $context, $blocks);
        echo "</legend>
    ";
        // line 33
        if ($this->renderBlock("fieldset_label_text", $context, $blocks)) {
            // line 34
            echo "        <label";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attributes_label"]) ? $context["attributes_label"] : null)), "method"), "html", null, true);
            echo ">";
            $this->displayBlock("fieldset_label_text", $context, $blocks);
            echo ": ";
            echo twig_escape_filter($this->env, ((array_key_exists("field_info", $context)) ? (_twig_default_filter((isset($context["field_info"]) ? $context["field_info"] : null), "")) : ("")), "html", null, true);
            echo "</label>
    ";
        }
        // line 36
        echo "    ";
        $this->displayBlock('fieldset_controls', $context, $blocks);
        // line 37
        echo "</fieldset>
";
        
        $__internal_4c478bf54338ced4c1cc46c13456e4d626d5954c4d5b9a4fb0278684d3246286->leave($__internal_4c478bf54338ced4c1cc46c13456e4d626d5954c4d5b9a4fb0278684d3246286_prof);

    }

    // line 32
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_0401d7569a48eee96892f3f6267f281630aaafd07d76b47ae09bab5e607d24a5 = $this->env->getExtension("native_profiler");
        $__internal_0401d7569a48eee96892f3f6267f281630aaafd07d76b47ae09bab5e607d24a5->enter($__internal_0401d7569a48eee96892f3f6267f281630aaafd07d76b47ae09bab5e607d24a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        
        $__internal_0401d7569a48eee96892f3f6267f281630aaafd07d76b47ae09bab5e607d24a5->leave($__internal_0401d7569a48eee96892f3f6267f281630aaafd07d76b47ae09bab5e607d24a5_prof);

    }

    // line 36
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_9c14c5340703853a7bc108618e0d433a95736e1734ceca64bc03d7cf30883427 = $this->env->getExtension("native_profiler");
        $__internal_9c14c5340703853a7bc108618e0d433a95736e1734ceca64bc03d7cf30883427->enter($__internal_9c14c5340703853a7bc108618e0d433a95736e1734ceca64bc03d7cf30883427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        
        $__internal_9c14c5340703853a7bc108618e0d433a95736e1734ceca64bc03d7cf30883427->leave($__internal_9c14c5340703853a7bc108618e0d433a95736e1734ceca64bc03d7cf30883427_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_fieldset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  109 => 32,  101 => 37,  98 => 36,  88 => 34,  86 => 33,  82 => 32,  78 => 31,  75 => 30,  72 => 28,  68 => 26,  66 => 25,  63 => 24,  61 => 20,  58 => 19,  56 => 17,  55 => 15,  52 => 14,  48 => 12,  44 => 10,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 2,  24 => 1,);
    }
}
/* {% from '@bolt/_buic/_info.twig' import buic_info %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set widget_name = block('fieldset_widget') %}*/
/* */
/* {% if not widget_name %}*/
/*     {% set data_bolt_widget = '' %}*/
/* {% elseif fieldset_conf|default() is iterable %}*/
/*     {% set data_bolt_widget = {(widget_name): fieldset_conf}|json_encode %}*/
/* {% else %}*/
/*     {% set data_bolt_widget = widget_name %}*/
/* {% endif %}*/
/* */
/* {% set attributes_fieldset = {*/
/*     'class':             'form-group bolt-field-' ~ block('fieldset_type'),*/
/*     'data-bolt-widget':  data_bolt_widget,*/
/* } %}*/
/* */
/* {% set attributes_label = {*/
/*     class:  'main ' ~ block('fieldset_label_class') ~ (block('fieldset_label_class') == 'col-xs-12' ? '' : ' control-label'),*/
/*     for:    block('fieldset_label_for'),*/
/* } %}*/
/* */
/* {% if block('fieldset_label_info') %}*/
/*     {% set field_info = buic_info(block('fieldset_label_text'), block('fieldset_label_info')) %}*/
/* {% endif %}*/
/* */
/* {#=== OUTPUT =========================================================================================================#}*/
/* */
/* <fieldset{{ macro.attr(attributes_fieldset) }}>*/
/*     <legend class="sr-only">{% block fieldset_label_text %}{% endblock fieldset_label_text %}</legend>*/
/*     {% if block('fieldset_label_text') %}*/
/*         <label{{ macro.attr(attributes_label) }}>{{ block('fieldset_label_text') }}: {{ field_info|default('') }}</label>*/
/*     {% endif %}*/
/*     {% block fieldset_controls %}{% endblock fieldset_controls %}*/
/* </fieldset>*/
/* */
