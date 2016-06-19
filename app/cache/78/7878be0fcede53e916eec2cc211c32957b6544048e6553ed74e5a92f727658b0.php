<?php

/* @bolt/components/panel-activity-system.twig */
class __TwigTemplate_9a2378faa7a49443d608f777bc8370d321df16eb387f08428a2a7e0ebe270f26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate((($this->env->getExtension('Bolt')->isAllowed("systemlog")) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/components/panel-activity-system.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8eb98455c3cc166719a6c29fa4bc943384c104200b802a9f35fcb88cbf523e5 = $this->env->getExtension("native_profiler");
        $__internal_f8eb98455c3cc166719a6c29fa4bc943384c104200b802a9f35fcb88cbf523e5->enter($__internal_f8eb98455c3cc166719a6c29fa4bc943384c104200b802a9f35fcb88cbf523e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-activity-system.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8eb98455c3cc166719a6c29fa4bc943384c104200b802a9f35fcb88cbf523e5->leave($__internal_f8eb98455c3cc166719a6c29fa4bc943384c104200b802a9f35fcb88cbf523e5_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_00bf7b65586a89ea9498148a6347e95dbbd91b87e008f58d46d058afb180b653 = $this->env->getExtension("native_profiler");
        $__internal_00bf7b65586a89ea9498148a6347e95dbbd91b87e008f58d46d058afb180b653->enter($__internal_00bf7b65586a89ea9498148a6347e95dbbd91b87e008f58d46d058afb180b653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-activity";
        
        $__internal_00bf7b65586a89ea9498148a6347e95dbbd91b87e008f58d46d058afb180b653->leave($__internal_00bf7b65586a89ea9498148a6347e95dbbd91b87e008f58d46d058afb180b653_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_985bb1b376d6c27faf3bc695733f494a68bce67ab9470af5a5e4087e11e3ee07 = $this->env->getExtension("native_profiler");
        $__internal_985bb1b376d6c27faf3bc695733f494a68bce67ab9470af5a5e4087e11e3ee07->enter($__internal_985bb1b376d6c27faf3bc695733f494a68bce67ab9470af5a5e4087e11e3ee07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-clock-o";
        
        $__internal_985bb1b376d6c27faf3bc695733f494a68bce67ab9470af5a5e4087e11e3ee07->leave($__internal_985bb1b376d6c27faf3bc695733f494a68bce67ab9470af5a5e4087e11e3ee07_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_9447c568ee3237460e1e717b0a4ff7a2037173a360b4d0678665d4836ba36d10 = $this->env->getExtension("native_profiler");
        $__internal_9447c568ee3237460e1e717b0a4ff7a2037173a360b4d0678665d4836ba36d10->enter($__internal_9447c568ee3237460e1e717b0a4ff7a2037173a360b4d0678665d4836ba36d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Bolt')->trans("panel.latest-activity.system");
        
        $__internal_9447c568ee3237460e1e717b0a4ff7a2037173a360b4d0678665d4836ba36d10->leave($__internal_9447c568ee3237460e1e717b0a4ff7a2037173a360b4d0678665d4836ba36d10_prof);

    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_385ced12d73dc11e07269ecd0e0eb0fa7c0b86f4c74736bb832714a88c26ebaa = $this->env->getExtension("native_profiler");
        $__internal_385ced12d73dc11e07269ecd0e0eb0fa7c0b86f4c74736bb832714a88c26ebaa->enter($__internal_385ced12d73dc11e07269ecd0e0eb0fa7c0b86f4c74736bb832714a88c26ebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 14
        echo "
    ";
        // line 15
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-activity-system.twig", 15);
        // line 16
        echo "    ";
        $context["__internal_aa5e3e5bd8b0b25a71bcabd4090311f8261840344c113f446357f44e3bb18f09"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-activity-system.twig", 16);
        // line 17
        echo "
    <ul class=\"activity\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "system", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            if (($this->getAttribute($context["log"], "route", array()) == "postLogin")) {
                // line 22
                echo "                    ";
                if (($this->getAttribute($context["log"], "ownerid", array()) == 0)) {
                    // line 23
                    echo "                        <em>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
                    echo "</em>
                    ";
                } else {
                    // line 25
                    echo "                        <em>";
                    echo $context["macro"]->getuserlink($this->getAttribute($context["log"], "ownerid", array()));
                    echo "</em> ";
                    echo $this->env->getExtension('Bolt')->trans("panel.latest-activity.logged-in");
                    echo "
                    ";
                }
                // line 27
                echo "                ";
            } elseif (($this->getAttribute($context["log"], "route", array()) == "logout")) {
                // line 28
                echo "                    <em>";
                echo $context["macro"]->getuserlink((($this->getAttribute($context["log"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["log"], "ownerid", array()), "")) : ("")));
                echo "</em> ";
                echo $this->env->getExtension('Bolt')->trans("panel.latest-activity.logged-out");
                echo "
                ";
            } else {
                // line 30
                echo "                    <em>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
                echo "</em>
                ";
            }
            // line 32
            echo "                <small>(";
            echo $context["__internal_aa5e3e5bd8b0b25a71bcabd4090311f8261840344c113f446357f44e3bb18f09"]->getbuic_moment($this->getAttribute($context["log"], "date", array()));
            echo ")</small>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </ul>

    <p><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("systemlog");
        echo "\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        ";
        // line 39
        echo $this->env->getExtension('Bolt')->trans("panel.latest-activity.button.more");
        echo "
    </a></p>

";
        
        $__internal_385ced12d73dc11e07269ecd0e0eb0fa7c0b86f4c74736bb832714a88c26ebaa->leave($__internal_385ced12d73dc11e07269ecd0e0eb0fa7c0b86f4c74736bb832714a88c26ebaa_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-activity-system.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 39,  147 => 37,  143 => 35,  133 => 32,  127 => 30,  119 => 28,  116 => 27,  108 => 25,  102 => 23,  99 => 22,  97 => 21,  94 => 20,  90 => 19,  86 => 17,  83 => 16,  81 => 15,  78 => 14,  72 => 13,  60 => 11,  48 => 9,  36 => 7,  21 => 5,);
    }
}
/* {##*/
/*  # Sidebar-Panel: Displays the latest activity*/
/*  # (Usage Example: Dashboards sidebar)*/
/*  #}*/
/* {% extends (isallowed('systemlog')) ? '@bolt/_base/_panel.twig' : '@bolt/_base/_nothing.twig' %}*/
/* */
/* {% block panel_class 'panel-activity' %}*/
/* */
/* {% block panel_icon 'fa-clock-o' %}*/
/* */
/* {% block panel_head __('panel.latest-activity.system') %}*/
/* */
/* {% block panel_body %}*/
/* */
/*     {% import '@bolt/_macro/_macro.twig' as macro %}*/
/*     {% from '@bolt/_buic/_moment.twig' import buic_moment %}*/
/* */
/*     <ul class="activity">*/
/*         {% for log in context.system %}*/
/*             <li>*/
/*                 {% if log.route == 'postLogin' %}*/
/*                     {% if log.ownerid == 0 %}*/
/*                         <em>{{ log.message }}</em>*/
/*                     {% else %}*/
/*                         <em>{{ macro.userlink(log.ownerid) }}</em> {{ __('panel.latest-activity.logged-in') }}*/
/*                     {% endif %}*/
/*                 {% elseif log.route == 'logout' %}*/
/*                     <em>{{ macro.userlink(log.ownerid|default('')) }}</em> {{ __('panel.latest-activity.logged-out') }}*/
/*                 {% else %}*/
/*                     <em>{{ log.message }}</em>*/
/*                 {% endif %}*/
/*                 <small>({{ buic_moment(log.date) }})</small>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/*     <p><a href="{{ path('systemlog') }}" class="btn btn-default">*/
/*         <i class="fa fa-fw fa-archive"></i>*/
/*         {{ __('panel.latest-activity.button.more') }}*/
/*     </a></p>*/
/* */
/* {% endblock panel_body %}*/
/* */
