<?php

/* @bolt/editcontent/fields/_slug.twig */
class __TwigTemplate_2e323a36a34fc05b042d1f358cde4c456bfefd6ab0e503e14aaa0bb4383d0395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 47
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_slug.twig", 47);
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
        $__internal_81796f2ae36fda84a28c197e5d747ee2b2ab38ebd47d75d7c62cbb73a9e7fbd8 = $this->env->getExtension("native_profiler");
        $__internal_81796f2ae36fda84a28c197e5d747ee2b2ab38ebd47d75d7c62cbb73a9e7fbd8->enter($__internal_81796f2ae36fda84a28c197e5d747ee2b2ab38ebd47d75d7c62cbb73a9e7fbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_slug.twig"));

        // line 3
        $context["option"] = array("uses" => ((twig_test_iterable((($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array()), array())) : (array())))) ? ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array()), array())) : (array()))) : (array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array())))), "viewless" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false)));
        // line 10
        $context["is_empty"] = ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method") == "");
        // line 11
        $context["has_uses"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "uses", array())) > 0);
        // line 13
        if ((isset($context["is_empty"]) ? $context["is_empty"] : null)) {
            // line 14
            $context["mode"] = (((isset($context["has_uses"]) ? $context["has_uses"] : null)) ? ("linked") : ("editable"));
        } else {
            // line 16
            $context["mode"] = "locked";
        }
        // line 19
        $context["uses"] = array();
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "uses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 21
            $context["uses"] = twig_array_merge((isset($context["uses"]) ? $context["uses"] : null), array(0 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "fields", array()), $context["key"], array(), "array"), "label", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "fields", array()), $context["key"], array(), "array"), "label", array())) : (twig_capitalize_string_filter($this->env, $context["key"])))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        $context["attributes"] = array("slug" => array("class" => "form-control", "id" =>         // line 28
(isset($context["key"]) ? $context["key"] : null), "name" =>         // line 29
(isset($context["name"]) ? $context["name"] : null), "readonly" => (        // line 30
(isset($context["mode"]) ? $context["mode"] : null) != "editable"), "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 32
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")));
        // line 36
        $context["trans"] = array("label_alias" => $this->env->getExtension('Bolt')->trans("field.slug.unique-alias"), "label_permalink" => $this->env->getExtension('Bolt')->trans("field.slug.permalink"), "menu_edit" => $this->env->getExtension('Bolt')->trans("field.slug.button.edit"), "menu_link" => $this->env->getExtension('Bolt')->trans("field.slug.button.link"), "menu_lock" => $this->env->getExtension('Bolt')->trans("field.slug.button.lock"), "warning" => $this->env->getExtension('Bolt')->trans("field.slug.message.warning"));
        // line 49
        $context["fieldset_conf"] = array("contentId" => $this->getAttribute($this->getAttribute(        // line 50
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()), "key" =>         // line 51
(isset($context["key"]) ? $context["key"] : null), "slug" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 52
(isset($context["context"]) ? $context["context"] : null), "content", array()), "contenttype", array()), "slug", array()), "uses" => $this->getAttribute(        // line 53
(isset($context["option"]) ? $context["option"] : null), "uses", array()));
        // line 47
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81796f2ae36fda84a28c197e5d747ee2b2ab38ebd47d75d7c62cbb73a9e7fbd8->leave($__internal_81796f2ae36fda84a28c197e5d747ee2b2ab38ebd47d75d7c62cbb73a9e7fbd8_prof);

    }

    // line 56
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_0e8bc3d7c277b8e0e63c59fa5b2012b4a4a815e5a4c90b99ac96ffa42249aff6 = $this->env->getExtension("native_profiler");
        $__internal_0e8bc3d7c277b8e0e63c59fa5b2012b4a4a815e5a4c90b99ac96ffa42249aff6->enter($__internal_0e8bc3d7c277b8e0e63c59fa5b2012b4a4a815e5a4c90b99ac96ffa42249aff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "slug";
        
        $__internal_0e8bc3d7c277b8e0e63c59fa5b2012b4a4a815e5a4c90b99ac96ffa42249aff6->leave($__internal_0e8bc3d7c277b8e0e63c59fa5b2012b4a4a815e5a4c90b99ac96ffa42249aff6_prof);

    }

    // line 57
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_d0726931c9740a708ec39d492d0733001b9a2aee9b88ebabafbcb17cace50290 = $this->env->getExtension("native_profiler");
        $__internal_d0726931c9740a708ec39d492d0733001b9a2aee9b88ebabafbcb17cace50290->enter($__internal_d0726931c9740a708ec39d492d0733001b9a2aee9b88ebabafbcb17cace50290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldSlug";
        
        $__internal_d0726931c9740a708ec39d492d0733001b9a2aee9b88ebabafbcb17cace50290->leave($__internal_d0726931c9740a708ec39d492d0733001b9a2aee9b88ebabafbcb17cace50290_prof);

    }

    // line 59
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_b798f1dce453db95878a93f419b8abe3e2c651edd5630ed6c7894f9f871a5001 = $this->env->getExtension("native_profiler");
        $__internal_b798f1dce453db95878a93f419b8abe3e2c651edd5630ed6c7894f9f871a5001->enter($__internal_b798f1dce453db95878a93f419b8abe3e2c651edd5630ed6c7894f9f871a5001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "viewless", array())) ? ($this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "label_alias", array())) : ($this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "label_permalink", array()))), "html", null, true);
        
        $__internal_b798f1dce453db95878a93f419b8abe3e2c651edd5630ed6c7894f9f871a5001->leave($__internal_b798f1dce453db95878a93f419b8abe3e2c651edd5630ed6c7894f9f871a5001_prof);

    }

    // line 60
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_46991f803398642187462a6cdebd1ef1ed3253618be8ea6adc217f0454ae6047 = $this->env->getExtension("native_profiler");
        $__internal_46991f803398642187462a6cdebd1ef1ed3253618be8ea6adc217f0454ae6047->enter($__internal_46991f803398642187462a6cdebd1ef1ed3253618be8ea6adc217f0454ae6047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo "col-sm-12";
        
        $__internal_46991f803398642187462a6cdebd1ef1ed3253618be8ea6adc217f0454ae6047->leave($__internal_46991f803398642187462a6cdebd1ef1ed3253618be8ea6adc217f0454ae6047_prof);

    }

    // line 62
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_ea0b46691dfa5dc6da8e43f75f6c5fe425e5107b9a52d4cff13b877db4d6d333 = $this->env->getExtension("native_profiler");
        $__internal_ea0b46691dfa5dc6da8e43f75f6c5fe425e5107b9a52d4cff13b877db4d6d333->enter($__internal_ea0b46691dfa5dc6da8e43f75f6c5fe425e5107b9a52d4cff13b877db4d6d333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 63
        echo "    <div class=\"col-sm-12\">
        <div class=\"input-group ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
        echo "\">";
        // line 66
        echo "            <span class=\"input-group-addon\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "route_prefix", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "route_prefix", array()), (("/" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . "/"))) : ((("/" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . "/"))), "html", null, true);
        echo "</span>

            <input";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "slug", array())), "method"), "html", null, true);
        echo ">

            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li class=\"lock";
        // line 75
        echo ((((isset($context["mode"]) ? $context["mode"] : null) == "locked")) ? (" disabled") : (""));
        echo "\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "menu_lock", array()), "html", null, true);
        echo "</a>
                    </li>
                    ";
        // line 78
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "uses", array()))) {
            // line 79
            echo "                        <li class=\"link";
            echo ((((isset($context["mode"]) ? $context["mode"] : null) == "linked")) ? (" disabled") : (""));
            echo "\">
                            <a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> <span>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "menu_link", array()), "html", null, true);
            echo " <var>";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["uses"]) ? $context["uses"] : null), " + "), "html", null, true);
            echo "</var></span></a>
                        </li>
                    ";
        }
        // line 83
        echo "                    <li class=\"edit";
        echo ((((isset($context["mode"]) ? $context["mode"] : null) == "editable")) ? (" disabled") : (""));
        echo "\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-pencil\"></i> ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "menu_edit", array()), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 90
        if ( !(isset($context["is_empty"]) ? $context["is_empty"] : null)) {
            // line 91
            echo "        <div class=\"col-sm-12 warning hidden\">
            <i class=\"fa fa-exclamation-triangle\"></i> ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "warning", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_ea0b46691dfa5dc6da8e43f75f6c5fe425e5107b9a52d4cff13b877db4d6d333->leave($__internal_ea0b46691dfa5dc6da8e43f75f6c5fe425e5107b9a52d4cff13b877db4d6d333_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_slug.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 92,  197 => 91,  195 => 90,  186 => 84,  181 => 83,  173 => 80,  168 => 79,  166 => 78,  161 => 76,  157 => 75,  147 => 68,  141 => 66,  138 => 64,  135 => 63,  129 => 62,  117 => 60,  105 => 59,  93 => 57,  81 => 56,  74 => 47,  72 => 53,  71 => 52,  70 => 51,  69 => 50,  68 => 49,  66 => 36,  64 => 32,  63 => 30,  62 => 29,  61 => 28,  60 => 25,  54 => 21,  50 => 20,  48 => 19,  45 => 16,  42 => 14,  40 => 13,  38 => 11,  36 => 10,  34 => 5,  33 => 4,  32 => 3,  11 => 47,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* */
/* {% set option = {*/
/*     uses:  field.uses|default([]) is iterable ? field.uses|default([]) : [field.uses],*/
/*     viewless: context.content.contenttype.viewless|default(false)*/
/* } %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set is_empty = context.content.get(contentkey) == '' %}*/
/* {% set has_uses = option.uses|length > 0 %}*/
/* */
/* {% if is_empty %}*/
/*     {% set mode = has_uses ? 'linked' : 'editable' %}*/
/* {% else %}*/
/*     {% set mode = 'locked' %}*/
/* {% endif %}*/
/* */
/* {% set uses = [] %}*/
/* {% for key in option.uses %}*/
/*     {% set uses = uses|merge([context.contenttype.fields[key].label ?: key|ucfirst]) %}*/
/* {% endfor %}*/
/* */
/* */
/* {% set attributes = {*/
/*     slug: {*/
/*         class:     'form-control',*/
/*         id:        key,*/
/*         name:      name,*/
/*         readonly:  mode != 'editable',*/
/*         type:      'text',*/
/*         value:     context.content.get(key),*/
/*     }*/
/* } %}*/
/* */
/* {% set trans = {*/
/*     label_alias:     __('field.slug.unique-alias'),*/
/*     label_permalink: __('field.slug.permalink'),*/
/*     menu_edit:       __('field.slug.button.edit'),*/
/*     menu_link:       __('field.slug.button.link'),*/
/*     menu_lock:       __('field.slug.button.lock'),*/
/*     warning:         __('field.slug.message.warning'),*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% set fieldset_conf = {*/
/*     contentId: context.content.id,*/
/*     key:       key,*/
/*     slug:      context.content.contenttype.slug,*/
/*     uses:      option.uses,*/
/* }%}*/
/* */
/* {% block fieldset_type 'slug' %}*/
/* {% block fieldset_widget 'fieldSlug' %}*/
/* */
/* {% block fieldset_label_text option.viewless ? trans.label_alias : trans.label_permalink %}*/
/* {% block fieldset_label_class 'col-sm-12' %}*/
/* */
/* {% block fieldset_controls %}*/
/*     <div class="col-sm-12">*/
/*         <div class="input-group {{ mode }}">*/
/*                                             {#- https://github.com/bolt/bolt/pull/4766 #}*/
/*             <span class="input-group-addon">{{ field.route_prefix|default('/' ~ context.contenttype.slug ~ '/') }}</span>*/
/* */
/*             <input{{ macro.attr(attributes.slug) }}>*/
/* */
/*             <div class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                     <span class="caret"></span>*/
/*                 </button>*/
/*                 <ul class="dropdown-menu dropdown-menu-right">*/
/*                     <li class="lock{{ mode == 'locked' ? ' disabled' : '' }}">*/
/*                         <a href="#"><i class="fa fa-fw fa-lock"></i> {{ trans.menu_lock }}</a>*/
/*                     </li>*/
/*                     {% if option.uses|length %}*/
/*                         <li class="link{{ mode == 'linked' ? ' disabled' : '' }}">*/
/*                             <a href="#"><i class="fa fa-fw fa-link"></i> <span>{{ trans.menu_link }} <var>{{ uses|join(' + ')}}</var></span></a>*/
/*                         </li>*/
/*                     {% endif %}*/
/*                     <li class="edit{{ mode == 'editable' ? ' disabled' : '' }}">*/
/*                         <a href="#"><i class="fa fa-fw fa-pencil"></i> {{ trans.menu_edit }}</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% if not is_empty %}*/
/*         <div class="col-sm-12 warning hidden">*/
/*             <i class="fa fa-exclamation-triangle"></i> {{ trans.warning }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock fieldset_controls %}*/
/* */
