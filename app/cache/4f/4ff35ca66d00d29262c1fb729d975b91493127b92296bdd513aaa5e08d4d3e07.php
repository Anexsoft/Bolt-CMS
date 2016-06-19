<?php

/* @bolt/_sub/_configuration_notices.twig */
class __TwigTemplate_c51c6cbaee60b5ff3999d93265b19d4e0628a6bb8b31510876655cea4f489304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate((( !twig_test_empty((isset($context["messages"]) ? $context["messages"] : null))) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/_sub/_configuration_notices.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f6fe5198ebe0f784b0b054ab73d1894ac350cc292a633e0584962b2d2d4969c = $this->env->getExtension("native_profiler");
        $__internal_6f6fe5198ebe0f784b0b054ab73d1894ac350cc292a633e0584962b2d2d4969c->enter($__internal_6f6fe5198ebe0f784b0b054ab73d1894ac350cc292a633e0584962b2d2d4969c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_configuration_notices.twig"));

        // line 4
        $context["messages"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "logger.flash", array(), "array"), "get", array(0 => "configuration"), "method");
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6fe5198ebe0f784b0b054ab73d1894ac350cc292a633e0584962b2d2d4969c->leave($__internal_6f6fe5198ebe0f784b0b054ab73d1894ac350cc292a633e0584962b2d2d4969c_prof);

    }

    // line 8
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_3c6ad97cdd91ccf734e62755d4750849004cfa79772476f07ae8a6a5d449d0b1 = $this->env->getExtension("native_profiler");
        $__internal_3c6ad97cdd91ccf734e62755d4750849004cfa79772476f07ae8a6a5d449d0b1->enter($__internal_3c6ad97cdd91ccf734e62755d4750849004cfa79772476f07ae8a6a5d449d0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-configuration";
        
        $__internal_3c6ad97cdd91ccf734e62755d4750849004cfa79772476f07ae8a6a5d449d0b1->leave($__internal_3c6ad97cdd91ccf734e62755d4750849004cfa79772476f07ae8a6a5d449d0b1_prof);

    }

    // line 10
    public function block_panel_alert($context, array $blocks = array())
    {
        $__internal_eefd3bb5f34868193b2d8de5b013d6fa10d9f587ea66fd2de277400a49fc8629 = $this->env->getExtension("native_profiler");
        $__internal_eefd3bb5f34868193b2d8de5b013d6fa10d9f587ea66fd2de277400a49fc8629->enter($__internal_eefd3bb5f34868193b2d8de5b013d6fa10d9f587ea66fd2de277400a49fc8629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_alert"));

        // line 11
        echo "    class=\"progress-bar progress-bar-info progress-bar-striped active\"
    style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\"
";
        
        $__internal_eefd3bb5f34868193b2d8de5b013d6fa10d9f587ea66fd2de277400a49fc8629->leave($__internal_eefd3bb5f34868193b2d8de5b013d6fa10d9f587ea66fd2de277400a49fc8629_prof);

    }

    // line 15
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_c3287e8c213a2b825625a5b742dec9b9b1120e04a94f2b4047b87704c2cd7c77 = $this->env->getExtension("native_profiler");
        $__internal_c3287e8c213a2b825625a5b742dec9b9b1120e04a94f2b4047b87704c2cd7c77->enter($__internal_c3287e8c213a2b825625a5b742dec9b9b1120e04a94f2b4047b87704c2cd7c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-bullhorn";
        
        $__internal_c3287e8c213a2b825625a5b742dec9b9b1120e04a94f2b4047b87704c2cd7c77->leave($__internal_c3287e8c213a2b825625a5b742dec9b9b1120e04a94f2b4047b87704c2cd7c77_prof);

    }

    // line 17
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_38ec673cd6cbeca7acd01c53f725f43c16373700cb6043ffb3d9b01008fe650c = $this->env->getExtension("native_profiler");
        $__internal_38ec673cd6cbeca7acd01c53f725f43c16373700cb6043ffb3d9b01008fe650c->enter($__internal_38ec673cd6cbeca7acd01c53f725f43c16373700cb6043ffb3d9b01008fe650c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo "<b>Configuration Notices</b>";
        
        $__internal_38ec673cd6cbeca7acd01c53f725f43c16373700cb6043ffb3d9b01008fe650c->leave($__internal_38ec673cd6cbeca7acd01c53f725f43c16373700cb6043ffb3d9b01008fe650c_prof);

    }

    // line 19
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_f995f870392565ece632a6317567662e8d33762153ba6b7c56fd61baeb9603fd = $this->env->getExtension("native_profiler");
        $__internal_f995f870392565ece632a6317567662e8d33762153ba6b7c56fd61baeb9603fd->enter($__internal_f995f870392565ece632a6317567662e8d33762153ba6b7c56fd61baeb9603fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 20
        echo "    ";
        $context["shown"] = array();
        // line 21
        echo "    <p>
        ";
        // line 22
        echo $this->env->getExtension('Bolt')->trans("general.bolt-configuration-issues-detected");
        echo "
    </p>
    <ul>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 26
            echo "        ";
            if (!twig_in_filter($context["msg"], (isset($context["shown"]) ? $context["shown"] : null))) {
                // line 27
                echo "            <li>";
                echo $this->env->getExtension('Bolt')->ymllink($context["msg"]);
                echo "</li>
            ";
                // line 28
                $context["shown"] = twig_array_merge((isset($context["shown"]) ? $context["shown"] : null), array(0 => $context["msg"]));
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </ul>
";
        
        $__internal_f995f870392565ece632a6317567662e8d33762153ba6b7c56fd61baeb9603fd->leave($__internal_f995f870392565ece632a6317567662e8d33762153ba6b7c56fd61baeb9603fd_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_configuration_notices.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 31,  126 => 30,  123 => 29,  121 => 28,  116 => 27,  113 => 26,  109 => 25,  103 => 22,  100 => 21,  97 => 20,  91 => 19,  79 => 17,  67 => 15,  58 => 11,  52 => 10,  40 => 8,  33 => 6,  31 => 4,  22 => 6,);
    }
}
/* {##*/
/*  # Sidebar-Panel-Item: Displays the 'Configuration needed' items*/
/*  #}*/
/* {% set messages = app['logger.flash'].get('configuration') %}*/
/* */
/* {% extends (messages is not empty) ? '@bolt/_base/_panel.twig' : '@bolt/_base/_nothing.twig' %}*/
/* */
/* {% block panel_class 'panel-configuration' %}*/
/* */
/* {% block panel_alert %}*/
/*     class="progress-bar progress-bar-info progress-bar-striped active"*/
/*     style="width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;"*/
/* {% endblock panel_alert %}*/
/* */
/* {% block panel_icon 'fa-bullhorn' %}*/
/* */
/* {% block panel_head %}<b>Configuration Notices</b>{% endblock %}*/
/* */
/* {% block panel_body %}*/
/*     {% set shown = [] %}*/
/*     <p>*/
/*         {{ __('general.bolt-configuration-issues-detected') }}*/
/*     </p>*/
/*     <ul>*/
/*     {% for msg in messages %}*/
/*         {% if msg not in shown %}*/
/*             <li>{{ msg|ymllink }}</li>*/
/*             {% set shown = shown|merge([msg]) %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     </ul>*/
/* {% endblock panel_body %}*/
/* */
