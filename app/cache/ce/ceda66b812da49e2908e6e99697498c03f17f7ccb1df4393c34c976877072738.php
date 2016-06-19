<?php

/* @bolt/editcontent/fields/_meta.twig */
class __TwigTemplate_5b01e07533fcb35f61d230c9eb62ecb25a87def6624f104088f647a5b4a1e065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 50
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_meta.twig", 50);
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
        $__internal_8ca4cb8670c14333ef9d3afbdd88d83bdfae9e176bf70c1bf8264d32723d0a72 = $this->env->getExtension("native_profiler");
        $__internal_8ca4cb8670c14333ef9d3afbdd88d83bdfae9e176bf70c1bf8264d32723d0a72->enter($__internal_8ca4cb8670c14333ef9d3afbdd88d83bdfae9e176bf70c1bf8264d32723d0a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fields/_meta.twig"));

        // line 3
        $context["attributes"] = array("id" => array("class" => "form-control narrow", "name_id" => "id", "readonly" => true, "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array())), "publish" => array("disabled" =>  !$this->getAttribute($this->getAttribute(        // line 13
(isset($context["context"]) ? $context["context"] : null), "can", array()), "publish", array()), "id" => "datepublish", "value" => ((($this->getAttribute($this->getAttribute(        // line 15
(isset($context["context"]) ? $context["context"] : null), "content", array()), "datepublish", array()) == "")) ? (twig_date_format_filter($this->env, "now", "Y-m-d H:i:s")) : ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datepublish", array())))), "depublish" => array("disabled" =>  !$this->getAttribute($this->getAttribute(        // line 19
(isset($context["context"]) ? $context["context"] : null), "can", array()), "depublish", array()), "id" => "datedepublish", "value" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["context"]) ? $context["context"] : null), "values", array()), "datedepublish", array()), "notice" => $this->env->getExtension('Bolt')->trans("general.phrase.depublish-date-past")), "status" => array("class" => "form-control", "disabled" => (twig_length_filter($this->env, $this->getAttribute(        // line 27
(isset($context["context"]) ? $context["context"] : null), "allowed_status", array())) <= 1), "id" => "statusselect", "name" => "status"), "ownerid" => array("class" => "form-control", "disabled" =>  !$this->getAttribute($this->getAttribute(        // line 34
(isset($context["context"]) ? $context["context"] : null), "can", array()), "change_ownership", array()), "id" => "ownerid", "name" => "ownerid"), "comment" => array("class" => "form-control", "disabled" =>  !$this->getAttribute($this->getAttribute(        // line 41
(isset($context["context"]) ? $context["context"] : null), "can", array()), "change_ownership", array()), "name_id" => "changelog-comment", "placeholder" => $this->env->getExtension('Bolt')->trans("Add a brief, optional comment to describe what's changed."), "type" => "text"));
        // line 50
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ca4cb8670c14333ef9d3afbdd88d83bdfae9e176bf70c1bf8264d32723d0a72->leave($__internal_8ca4cb8670c14333ef9d3afbdd88d83bdfae9e176bf70c1bf8264d32723d0a72_prof);

    }

    // line 52
    public function block_fieldset_type($context, array $blocks = array())
    {
        $__internal_9a7f0ce232e2d3220ee14acd0d529c86f40d8ccf74cc81b253e802896949e22d = $this->env->getExtension("native_profiler");
        $__internal_9a7f0ce232e2d3220ee14acd0d529c86f40d8ccf74cc81b253e802896949e22d->enter($__internal_9a7f0ce232e2d3220ee14acd0d529c86f40d8ccf74cc81b253e802896949e22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_type"));

        echo "meta";
        
        $__internal_9a7f0ce232e2d3220ee14acd0d529c86f40d8ccf74cc81b253e802896949e22d->leave($__internal_9a7f0ce232e2d3220ee14acd0d529c86f40d8ccf74cc81b253e802896949e22d_prof);

    }

    // line 53
    public function block_fieldset_widget($context, array $blocks = array())
    {
        $__internal_663125b361fcb04c4ecb1cf0e1017e13809007659e7837dd0899500a9f19165a = $this->env->getExtension("native_profiler");
        $__internal_663125b361fcb04c4ecb1cf0e1017e13809007659e7837dd0899500a9f19165a->enter($__internal_663125b361fcb04c4ecb1cf0e1017e13809007659e7837dd0899500a9f19165a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_widget"));

        echo "fieldMeta";
        
        $__internal_663125b361fcb04c4ecb1cf0e1017e13809007659e7837dd0899500a9f19165a->leave($__internal_663125b361fcb04c4ecb1cf0e1017e13809007659e7837dd0899500a9f19165a_prof);

    }

    // line 55
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        $__internal_69924340db1214927cc2f4f6a79dc072241a90d48bdf99c55a528b60d1737c02 = $this->env->getExtension("native_profiler");
        $__internal_69924340db1214927cc2f4f6a79dc072241a90d48bdf99c55a528b60d1737c02->enter($__internal_69924340db1214927cc2f4f6a79dc072241a90d48bdf99c55a528b60d1737c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_text"));

        echo $this->env->getExtension('Bolt')->trans("general.phrase.meta-information");
        
        $__internal_69924340db1214927cc2f4f6a79dc072241a90d48bdf99c55a528b60d1737c02->leave($__internal_69924340db1214927cc2f4f6a79dc072241a90d48bdf99c55a528b60d1737c02_prof);

    }

    // line 56
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        $__internal_2eda1ffe980f712af16e264a89f7dc3a35312151dafe7e6c5a9a57c3e102e0ae = $this->env->getExtension("native_profiler");
        $__internal_2eda1ffe980f712af16e264a89f7dc3a35312151dafe7e6c5a9a57c3e102e0ae->enter($__internal_2eda1ffe980f712af16e264a89f7dc3a35312151dafe7e6c5a9a57c3e102e0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_label_class"));

        echo twig_escape_filter($this->env, ("col-xs-12" . (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) ? ("") : (" hidden"))), "html", null, true);
        
        $__internal_2eda1ffe980f712af16e264a89f7dc3a35312151dafe7e6c5a9a57c3e102e0ae->leave($__internal_2eda1ffe980f712af16e264a89f7dc3a35312151dafe7e6c5a9a57c3e102e0ae_prof);

    }

    // line 58
    public function block_fieldset_controls($context, array $blocks = array())
    {
        $__internal_8addfd227be132bc852be6fc91a0349ec516a92bd1d2c832c9fd57dbebcd155e = $this->env->getExtension("native_profiler");
        $__internal_8addfd227be132bc852be6fc91a0349ec516a92bd1d2c832c9fd57dbebcd155e->enter($__internal_8addfd227be132bc852be6fc91a0349ec516a92bd1d2c832c9fd57dbebcd155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_controls"));

        // line 59
        echo "    ";
        $context["__internal_93ff191e9e0613cb46b4a7091ac689c56a315d7dcbd016d1e84b4e613b66d8b3"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/fields/_meta.twig", 59);
        // line 60
        echo "
    <div class=\"col-xs-12\">
        ";
        // line 62
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 63
            echo "            <h3>
                ";
            // line 64
            echo $this->env->getExtension('Bolt')->trans("general.phrase.meta-information");
            echo "
            </h3>
        ";
        }
        // line 67
        echo "
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 69
        echo $this->env->getExtension('Bolt')->trans("general.phrase.id");
        echo " (№)</label>
            <div class=\"col-sm-8\">
                <input";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())), "method"), "html", null, true);
        echo ">
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 76
        echo $this->env->getExtension('Bolt')->trans("general.phrase.publication-date-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input_datetime", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "publish", array())), "method"), "html", null, true);
        echo "
            </div>
        </div>

        <div class=\"form-group depublish-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 83
        echo $this->env->getExtension('Bolt')->trans("general.phrase.depublication-date-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input_datetime", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "depublish", array())), "method"), "html", null, true);
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 90
        echo $this->env->getExtension('Bolt')->trans("general.phrase.status-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                <select";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "status", array())), "method"), "html", null, true);
        echo ">
                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "allowed_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 94
            echo "                        ";
            $context["attr_opt"] = array("value" =>             // line 95
$context["status"], "selected" => ($this->getAttribute($this->getAttribute(            // line 96
(isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == $context["status"]));
            // line 98
            echo "                        <option";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_opt"]) ? $context["attr_opt"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $context["status"], array(), "array"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                </select>
                ";
        // line 101
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datecreated", array()) > "1970-01-01 01:01:01")) {
            // line 102
            echo "                    <p class=\"form-control-static\">
                        ";
            // line 103
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.created", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
                        ";
            // line 104
            echo $context["__internal_93ff191e9e0613cb46b4a7091ac689c56a315d7dcbd016d1e84b4e613b66d8b3"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datecreated", array()));
            echo "
                        ";
            // line 105
            echo $this->env->getExtension('Bolt')->trans("general.phrase.edited");
            echo "
                        ";
            // line 106
            echo $context["__internal_93ff191e9e0613cb46b4a7091ac689c56a315d7dcbd016d1e84b4e613b66d8b3"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
            echo ".
                    </p>
                ";
        }
        // line 109
        echo "            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 113
        echo $this->env->getExtension('Bolt')->trans("general.phrase.owner-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                <select";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "ownerid", array())), "method"), "html", null, true);
        echo ">
                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 117
            echo "                        ";
            $context["attr_opt"] = array("value" => $this->getAttribute(            // line 118
$context["user"], "id", array()), "selected" => ($this->getAttribute(            // line 119
(isset($context["context"]) ? $context["context"] : null), "contentowner", array()) && ($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contentowner", array()), "id", array()))));
            // line 121
            echo "                        <option";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_opt"]) ? $context["attr_opt"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "displayname", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                </select>
            </div>
        </div>

        ";
        // line 127
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/changelog/enabled"), "method")) {
            // line 128
            echo "            <div class=\"form-group\">
                <label class=\"col-sm-4 control-label\">";
            // line 129
            echo $this->env->getExtension('Bolt')->trans("contenttypes.record.comment-add-colon");
            echo "</label>
                <div class=\"col-sm-8\">
                    <input";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "comment", array())), "method"), "html", null, true);
            echo ">
                </div>
            </div>
        ";
        }
        // line 135
        echo "    </div>
";
        
        $__internal_8addfd227be132bc852be6fc91a0349ec516a92bd1d2c832c9fd57dbebcd155e->leave($__internal_8addfd227be132bc852be6fc91a0349ec516a92bd1d2c832c9fd57dbebcd155e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 135,  270 => 131,  265 => 129,  262 => 128,  260 => 127,  254 => 123,  243 => 121,  241 => 119,  240 => 118,  238 => 117,  234 => 116,  230 => 115,  225 => 113,  219 => 109,  213 => 106,  209 => 105,  205 => 104,  201 => 103,  198 => 102,  196 => 101,  193 => 100,  182 => 98,  180 => 96,  179 => 95,  177 => 94,  173 => 93,  169 => 92,  164 => 90,  156 => 85,  151 => 83,  143 => 78,  138 => 76,  130 => 71,  125 => 69,  121 => 67,  115 => 64,  112 => 63,  110 => 62,  106 => 60,  103 => 59,  97 => 58,  85 => 56,  73 => 55,  61 => 53,  49 => 52,  42 => 50,  40 => 41,  39 => 34,  38 => 27,  37 => 21,  36 => 19,  35 => 15,  34 => 13,  33 => 9,  32 => 3,  11 => 50,);
    }
}
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set attributes = {*/
/*     id: {*/
/*         class:     'form-control narrow',*/
/*         name_id:   'id',*/
/*         readonly:  true,*/
/*         type:      'text',*/
/*         value:     context.content.id,*/
/*     },*/
/* */
/*     publish: {*/
/*         disabled: (not context.can.publish),*/
/*         id:       'datepublish',*/
/*         value:    (context.content.datepublish == '') ? "now"|date('Y-m-d H:i:s') : context.content.datepublish,*/
/*     },*/
/* */
/*     depublish: {*/
/*         disabled:  (not context.can.depublish),*/
/*         id:        'datedepublish',*/
/*         value:     context.values.datedepublish,*/
/*         notice:     __('general.phrase.depublish-date-past'),*/
/*     },*/
/* */
/*     status: {*/
/*         class:     'form-control',*/
/*         disabled:  (context.allowed_status|length <= 1),*/
/*         id:        'statusselect',*/
/*         name:      'status',*/
/*     },*/
/* */
/*     ownerid: {*/
/*         class:     'form-control',*/
/*         disabled:  (not context.can.change_ownership),*/
/*         id:        'ownerid',*/
/*         name:      'ownerid',*/
/*     },*/
/* */
/*     comment: {*/
/*         class:        'form-control',*/
/*         disabled:     (not context.can.change_ownership),*/
/*         name_id:      'changelog-comment',*/
/*         placeholder:  __('Add a brief, optional comment to describe what\'s changed.'),*/
/*         type:         'text',*/
/*     },*/
/* } %}*/
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% extends '@bolt/_base/_fieldset.twig' %}*/
/* */
/* {% block fieldset_type 'meta' %}*/
/* {% block fieldset_widget 'fieldMeta' %}*/
/* */
/* {% block fieldset_label_text  __('general.phrase.meta-information') %}*/
/* {% block fieldset_label_class 'col-xs-12' ~ (context.has.tabs ? '' : ' hidden') %}*/
/* */
/* {% block fieldset_controls %}*/
/*     {% from '@bolt/_buic/_moment.twig' import buic_moment %}*/
/* */
/*     <div class="col-xs-12">*/
/*         {% if not context.has.tabs %}*/
/*             <h3>*/
/*                 {{ __('general.phrase.meta-information') }}*/
/*             </h3>*/
/*         {% endif %}*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ __('general.phrase.id') }} (№)</label>*/
/*             <div class="col-sm-8">*/
/*                 <input{{ macro.attr(attributes.id) }}>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ __('general.phrase.publication-date-colon') }}</label>*/
/*             <div class="col-sm-8">*/
/*                 {{ macro.input_datetime(attributes.publish) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group depublish-group">*/
/*             <label class="col-sm-4 control-label">{{ __('general.phrase.depublication-date-colon') }}</label>*/
/*             <div class="col-sm-8">*/
/*                 {{ macro.input_datetime(attributes.depublish) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ __('general.phrase.status-colon') }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <select{{ macro.attr(attributes.status) }}>*/
/*                     {% for status in context.allowed_status %}*/
/*                         {% set attr_opt = {*/
/*                             value:     status,*/
/*                             selected:  (context.content.status == status),*/
/*                         } %}*/
/*                         <option{{ macro.attr(attr_opt) }}>{{ status_names[status] }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 {% if context.content.datecreated > '1970-01-01 01:01:01' %}*/
/*                     <p class="form-control-static">*/
/*                         {{ __('contenttypes.generic.created', {'%contenttype%': context.contenttype.slug}) }}*/
/*                         {{ buic_moment(context.content.datecreated) }}*/
/*                         {{ __('general.phrase.edited') }}*/
/*                         {{ buic_moment(context.content.datechanged) }}.*/
/*                     </p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-sm-4 control-label">{{ __('general.phrase.owner-colon') }}</label>*/
/*             <div class="col-sm-8">*/
/*                 <select{{ macro.attr(attributes.ownerid) }}>*/
/*                     {% for user in users %}*/
/*                         {% set attr_opt = {*/
/*                             value:     user.id,*/
/*                             selected:  (context.contentowner and user.id == context.contentowner.id),*/
/*                         } %}*/
/*                         <option{{ macro.attr(attr_opt) }}>{{ user.displayname }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if config.get('general/changelog/enabled') %}*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-4 control-label">{{ __('contenttypes.record.comment-add-colon') }}</label>*/
/*                 <div class="col-sm-8">*/
/*                     <input{{ macro.attr(attributes.comment) }}>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock fieldset_controls %}*/
/* */
