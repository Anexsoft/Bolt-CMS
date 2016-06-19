<?php

/* @bolt/editcontent/fields/_grouping.twig */
class __TwigTemplate_0a9f99b5886c273e6d2a68e3ba80103654025ede35f5c0710328ee75420b8666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_grouping.twig", 16);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
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
        $__internal_48816a5a0ce25e94b6d359179c986c48b9b00078d1e92f3e415f4eeb8ec3c149 = $this->env->getExtension("native_profiler");
        $__internal_48816a5a0ce25e94b6d359179c986c48b9b00078d1e92f3e415f4eeb8ec3c149->enter($__internal_48816a5a0ce25e94b6d359179c986c48b9b00078d1e92f3e415f4eeb8ec3c149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_grouping.twig"));

        // line 3
        $context["id_select"] = ("taxonomy-" . $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()));
        // line 4
        $context["id_order"] = ("taxonomy-order-" . $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()));
        // line 6
        $context["attributes"] = array("select" => array("name" => (("taxonomy[" . $this->getAttribute(        // line 8
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())) . "][]"), "id" =>         // line 9
(isset($context["id_select"]) ? $context["id_select"] : null), "class" => "form-control"));
        // line 16
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48816a5a0ce25e94b6d359179c986c48b9b00078d1e92f3e415f4eeb8ec3c149->leave($__internal_48816a5a0ce25e94b6d359179c986c48b9b00078d1e92f3e415f4eeb8ec3c149_prof);

    }

    // line 18
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_ded3d7cfae29f3b7eaafeb7acc9615693bf858955f1bd3f564320345a6d56507 = $this->env->getExtension("native_profiler");
        $__internal_ded3d7cfae29f3b7eaafeb7acc9615693bf858955f1bd3f564320345a6d56507->enter($__internal_ded3d7cfae29f3b7eaafeb7acc9615693bf858955f1bd3f564320345a6d56507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "grouping";
        
        $__internal_ded3d7cfae29f3b7eaafeb7acc9615693bf858955f1bd3f564320345a6d56507->leave($__internal_ded3d7cfae29f3b7eaafeb7acc9615693bf858955f1bd3f564320345a6d56507_prof);

    }

    // line 20
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_7f56ee5b6a74f6db8b2364fe3111f85153e30fe91cf1489e2613e050e25fa1f4 = $this->env->getExtension("native_profiler");
        $__internal_7f56ee5b6a74f6db8b2364fe3111f85153e30fe91cf1489e2613e050e25fa1f4->enter($__internal_7f56ee5b6a74f6db8b2364fe3111f85153e30fe91cf1489e2613e050e25fa1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name", array()), "html", null, true);
        
        $__internal_7f56ee5b6a74f6db8b2364fe3111f85153e30fe91cf1489e2613e050e25fa1f4->leave($__internal_7f56ee5b6a74f6db8b2364fe3111f85153e30fe91cf1489e2613e050e25fa1f4_prof);

    }

    // line 21
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_3addb1e449fbb6fec614ed288bebf34a5eb8860208d33f6c642baf7db4d8a7f3 = $this->env->getExtension("native_profiler");
        $__internal_3addb1e449fbb6fec614ed288bebf34a5eb8860208d33f6c642baf7db4d8a7f3->enter($__internal_3addb1e449fbb6fec614ed288bebf34a5eb8860208d33f6c642baf7db4d8a7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-sm-3";
        
        $__internal_3addb1e449fbb6fec614ed288bebf34a5eb8860208d33f6c642baf7db4d8a7f3->leave($__internal_3addb1e449fbb6fec614ed288bebf34a5eb8860208d33f6c642baf7db4d8a7f3_prof);

    }

    // line 23
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_bfc7b690faab3ecbb439b23a48d8cdc70e114f9ebcf083364604262617248f8c = $this->env->getExtension("native_profiler");
        $__internal_bfc7b690faab3ecbb439b23a48d8cdc70e114f9ebcf083364604262617248f8c->enter($__internal_bfc7b690faab3ecbb439b23a48d8cdc70e114f9ebcf083364604262617248f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 24
        echo "    <div class=\"col-sm-9\">
        <div class=\"form-group\">
            <label for=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["id_select"]) ? $context["id_select"] : null), "html", null, true);
        echo "\" class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name", array()), "html", null, true);
        echo "</label>
            <div class=\"col-xs-12\">
                <select";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "select", array())), "method"), "html", null, true);
        echo ">
                    <option value=\"\">";
        // line 29
        echo $this->env->getExtension('Bolt')->trans("(no group)");
        echo "</option>
                    <option value=\"\" disabled>-----------</option>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()));
        foreach ($context['_seq'] as $context["slug"] => $context["group"]) {
            // line 32
            echo "                        ";
            $context["attr_opt"] = array("value" =>             // line 33
$context["slug"], "selected" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 34
(isset($context["context"]) ? $context["context"] : null), "content", array()), "taxonomy", array()), "containsKeyValue", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), 1 => $context["slug"]), "method"));
            // line 36
            echo "                        <option";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_opt"]) ? $context["attr_opt"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </select>
            </div>
        </div>

        ";
        // line 42
        if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array(), "any", true, true) && ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array()) == true))) {
            // line 43
            echo "            ";
            $context["grouping"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "taxonomy", array()), "getField", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())), "method"), "first", array(), "method");
            // line 44
            echo "            ";
            if (((isset($context["grouping"]) ? $context["grouping"] : null) && $this->getAttribute((isset($context["grouping"]) ? $context["grouping"] : null), "sortorder", array()))) {
                // line 45
                echo "                ";
                $context["sortval"] = $this->getAttribute((isset($context["grouping"]) ? $context["grouping"] : null), "sortorder", array());
                // line 46
                echo "            ";
            }
            // line 47
            echo "            ";
            $context["attr_order"] = array("class" => "form-control", "id" =>             // line 49
(isset($context["id_order"]) ? $context["id_order"] : null), "name" => (("taxonomy-order[" . $this->getAttribute(            // line 50
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())) . "]"), "step" => "1", "type" => "number", "value" => ((            // line 53
array_key_exists("sortval", $context)) ? (_twig_default_filter((isset($context["sortval"]) ? $context["sortval"] : null), 0)) : (0)));
            // line 55
            echo "            <div class=\"form-group\">
                <label for=\"";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["id_order"]) ? $context["id_order"] : null), "html", null, true);
            echo "\" class=\"control-label col-xs-3\">";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.order");
            echo "</label>
                <div class=\"col-xs-9\">
                    <input";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_order"]) ? $context["attr_order"] : null)), "method"), "html", null, true);
            echo ">
                </div>
            </div>
        ";
        }
        // line 62
        echo "    </div>
";
        
        $__internal_bfc7b690faab3ecbb439b23a48d8cdc70e114f9ebcf083364604262617248f8c->leave($__internal_bfc7b690faab3ecbb439b23a48d8cdc70e114f9ebcf083364604262617248f8c_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_grouping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 62,  164 => 58,  157 => 56,  154 => 55,  152 => 53,  151 => 50,  150 => 49,  148 => 47,  145 => 46,  142 => 45,  139 => 44,  136 => 43,  134 => 42,  128 => 38,  117 => 36,  115 => 34,  114 => 33,  112 => 32,  108 => 31,  103 => 29,  99 => 28,  92 => 26,  88 => 24,  82 => 23,  70 => 21,  58 => 20,  46 => 18,  39 => 16,  37 => 9,  36 => 8,  35 => 6,  33 => 4,  31 => 3,  11 => 16,);
    }
}
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set id_select = 'taxonomy-' ~ taxonomy.slug %}*/
/* {% set id_order = 'taxonomy-order-' ~ taxonomy.slug %}*/
/* */
/* {% set attributes = {*/
/*     select: {*/
/*         name:      'taxonomy[' ~ taxonomy.slug ~ '][]',*/
/*         id:        id_select,*/
/*         class:     'form-control',*/
/*     }*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% block fieldset_type 'grouping' %}*/
/* */
/* {% block fieldset_label_text  taxonomy.name %}*/
/* {% block fieldset_label_class 'col-sm-3' %}*/
/* */
/* {% block fieldset_controls %}*/
/*     <div class="col-sm-9">*/
/*         <div class="form-group">*/
/*             <label for="{{ id_select }}" class="sr-only">{{ taxonomy.name }}</label>*/
/*             <div class="col-xs-12">*/
/*                 <select{{ macro.attr(attributes.select) }}>*/
/*                     <option value="">{{ __('(no group)') }}</option>*/
/*                     <option value="" disabled>-----------</option>*/
/*                     {% for slug, group in taxonomy.options %}*/
/*                         {% set attr_opt = {*/
/*                             value:     slug,*/
/*                             selected:  context.content.taxonomy.containsKeyValue(taxonomy.slug, slug),*/
/*                         } %}*/
/*                         <option{{ macro.attr(attr_opt) }}>{{ group }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if taxonomy.has_sortorder is defined and taxonomy.has_sortorder == true %}*/
/*             {% set grouping =  context.content.taxonomy.getField(taxonomy.slug).first() %}*/
/*             {% if grouping and grouping.sortorder %}*/
/*                 {% set sortval =  grouping.sortorder %}*/
/*             {% endif %}*/
/*             {% set attr_order = {*/
/*                 class:  'form-control',*/
/*                 id:     id_order,*/
/*                 name:   'taxonomy-order[' ~ taxonomy.slug ~ ']',*/
/*                 step:   '1',*/
/*                 type:   'number',*/
/*                 value:  sortval|default(0),*/
/*             } %}*/
/*             <div class="form-group">*/
/*                 <label for="{{ id_order }}" class="control-label col-xs-3">{{ __('general.phrase.order') }}</label>*/
/*                 <div class="col-xs-9">*/
/*                     <input{{ macro.attr(attr_order) }}>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock fieldset_controls %}*/
/* */
