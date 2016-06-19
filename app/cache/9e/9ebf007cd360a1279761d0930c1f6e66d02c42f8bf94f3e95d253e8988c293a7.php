<?php

/* @bolt/editcontent/_includes-data.twig */
class __TwigTemplate_a7b2aa63613073d2df0d33401afa10ab8c98dc3e6dfb48af5a89e32c7d228767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b337738359a57dbc4577ffe277668d682958ad161194eebe63585161bec57fab = $this->env->getExtension("native_profiler");
        $__internal_b337738359a57dbc4577ffe277668d682958ad161194eebe63585161bec57fab->enter($__internal_b337738359a57dbc4577ffe277668d682958ad161194eebe63585161bec57fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_includes-data.twig"));

        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    <div id=\"";
        echo "%NOTICE_ID%";
        echo "\" class=\"alert alert-danger alert-dismissible\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <label for=\"%FIELD_ID%\">";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("general.phrase.field-fieldname");
        echo "</label>
        %MESSAGE%
    </div>
";
        $context["template_alertbox"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("validation.alertbox", trim((isset($context["template_alertbox"]) ? $context["template_alertbox"] : null))), "html", null, true);
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("validation.generic_msg", $this->env->getExtension('Bolt')->trans("general.phrase.required-is-or-match-pattern")), "html", null, true);
        echo "

";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("editcontent.msg.change_quit", $this->env->getExtension('Bolt')->trans("general.phrase.warning-unfinished-changes-loss")), "html", null, true);
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("editcontent.msg.saving", $this->env->getExtension('Bolt')->trans("general.phrase.saving-ellipsis")), "html", null, true);
        echo "

";
        // line 18
        echo "
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtypes", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 20
            echo "    ";
            echo twig_include($this->env, $context, (("@bolt/editcontent/fielddata/_" . $context["type"]) . ".twig"), array(), true, true);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        if ((((twig_in_filter("file", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtypes", array())) || twig_in_filter("filelist", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtypes", array()))) || twig_in_filter("image", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtypes", array()))) || twig_in_filter("imagelist", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtypes", array())))) {
            // line 26
            echo "    ";
            echo twig_include($this->env, $context, "@bolt/editcontent/data/_uploads.twig");
            echo "
";
        }
        
        $__internal_b337738359a57dbc4577ffe277668d682958ad161194eebe63585161bec57fab->leave($__internal_b337738359a57dbc4577ffe277668d682958ad161194eebe63585161bec57fab_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_includes-data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  104 => 25,  101 => 24,  98 => 22,  81 => 20,  64 => 19,  61 => 18,  56 => 15,  52 => 14,  47 => 12,  43 => 11,  40 => 10,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# General data #}*/
/* */
/* {% set template_alertbox %}*/
/*     <div id="{{ '%NOTICE_ID%' }}" class="alert alert-danger alert-dismissible">*/
/*         <button type="button" class="close" data-dismiss="alert">×</button>*/
/*         <label for="%FIELD_ID%">{{ __('general.phrase.field-fieldname') }}</label>*/
/*         %MESSAGE%*/
/*     </div>*/
/* {% endset %}*/
/* */
/* {{ data('validation.alertbox',         template_alertbox|trim) }}*/
/* {{ data('validation.generic_msg',      __('general.phrase.required-is-or-match-pattern')) }}*/
/* */
/* {{ data('editcontent.msg.change_quit', __('general.phrase.warning-unfinished-changes-loss')) }}*/
/* {{ data('editcontent.msg.saving',      __('general.phrase.saving-ellipsis')) }}*/
/* */
/* {# Process field specific includes and data #}*/
/* */
/* {% for type in context.fieldtypes %}*/
/*     {{ include('@bolt/editcontent/fielddata/_' ~ type ~ '.twig', ignore_missing = true) }}*/
/* {% endfor %}*/
/* */
/* {# Has uploads? #}*/
/* */
/* {% if 'file' in context.fieldtypes or 'filelist' in context.fieldtypes or 'image' in context.fieldtypes or 'imagelist' in context.fieldtypes %}*/
/*     {{ include('@bolt/editcontent/data/_uploads.twig') }}*/
/* {% endif %}*/
/* */
