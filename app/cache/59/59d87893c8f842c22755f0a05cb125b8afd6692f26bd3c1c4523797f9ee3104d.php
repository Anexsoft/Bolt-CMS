<?php

/* @bolt/dashboard/dashboard.twig */
class __TwigTemplate_ac94884343e370602042fa16cee0584ae83ce3de1e02fc940c05947d2b8ed665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/dashboard/dashboard.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03782e438d20749dc1ff292dd3dd3c30a4a1568f10bf8ce5e564b8156e8719bd = $this->env->getExtension("native_profiler");
        $__internal_03782e438d20749dc1ff292dd3dd3c30a4a1568f10bf8ce5e564b8156e8719bd->enter($__internal_03782e438d20749dc1ff292dd3dd3c30a4a1568f10bf8ce5e564b8156e8719bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/dashboard.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03782e438d20749dc1ff292dd3dd3c30a4a1568f10bf8ce5e564b8156e8719bd->leave($__internal_03782e438d20749dc1ff292dd3dd3c30a4a1568f10bf8ce5e564b8156e8719bd_prof);

    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_a7e345bc789bcad2364e2f849bb7d7ae295fa1dd8e6811e7e677e7b93d80b2e6 = $this->env->getExtension("native_profiler");
        $__internal_a7e345bc789bcad2364e2f849bb7d7ae295fa1dd8e6811e7e677e7b93d80b2e6->enter($__internal_a7e345bc789bcad2364e2f849bb7d7ae295fa1dd8e6811e7e677e7b93d80b2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Dashboard";
        
        $__internal_a7e345bc789bcad2364e2f849bb7d7ae295fa1dd8e6811e7e677e7b93d80b2e6->leave($__internal_a7e345bc789bcad2364e2f849bb7d7ae295fa1dd8e6811e7e677e7b93d80b2e6_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e7f91c9f750c0a91dc8d0b10c14dd004cb049cb41ad823f5a07849b04ec54f65 = $this->env->getExtension("native_profiler");
        $__internal_e7f91c9f750c0a91dc8d0b10c14dd004cb049cb41ad823f5a07849b04ec54f65->enter($__internal_e7f91c9f750c0a91dc8d0b10c14dd004cb049cb41ad823f5a07849b04ec54f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt')->trans("page.dashboard.title");
        
        $__internal_e7f91c9f750c0a91dc8d0b10c14dd004cb049cb41ad823f5a07849b04ec54f65->leave($__internal_e7f91c9f750c0a91dc8d0b10c14dd004cb049cb41ad823f5a07849b04ec54f65_prof);

    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        $__internal_dcbaccb113dfa0af5b86ae858a733b56f55a9e983167ea1790d694157fe667db = $this->env->getExtension("native_profiler");
        $__internal_dcbaccb113dfa0af5b86ae858a733b56f55a9e983167ea1790d694157fe667db->enter($__internal_dcbaccb113dfa0af5b86ae858a733b56f55a9e983167ea1790d694157fe667db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo "";
        
        $__internal_dcbaccb113dfa0af5b86ae858a733b56f55a9e983167ea1790d694157fe667db->leave($__internal_dcbaccb113dfa0af5b86ae858a733b56f55a9e983167ea1790d694157fe667db_prof);

    }

    // line 12
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_b9a6ab3dd6ed5585e21fa20a78e55696cde3c6f7e91e502cf211d270bccd59f0 = $this->env->getExtension("native_profiler");
        $__internal_b9a6ab3dd6ed5585e21fa20a78e55696cde3c6f7e91e502cf211d270bccd59f0->enter($__internal_b9a6ab3dd6ed5585e21fa20a78e55696cde3c6f7e91e502cf211d270bccd59f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 13
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 17
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            ";
        // line 19
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "suggestloripsum", array())) {
            // line 20
            echo "                ";
            echo twig_include($this->env, $context, "@bolt/dashboard/_suggestloripsum.twig");
            echo "
            ";
        }
        // line 22
        echo "
            ";
        // line 23
        echo $this->env->getExtension('Bolt')->widgets("dashboard_below_header", "backend");
        echo "

            <div class=\"quicklinks\">
                ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method")) > 3)) {
            // line 27
            echo "                    ";
            echo twig_include($this->env, $context, "@bolt/dashboard/_quicklinks-dropdown.twig");
            echo "
                ";
        } else {
            // line 29
            echo "                    ";
            echo twig_include($this->env, $context, "@bolt/dashboard/_quicklinks-buttons.twig");
            echo "
                ";
        }
        // line 31
        echo "            </div>

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "latest", array()));
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
        foreach ($context['_seq'] as $context["contenttype"] => $context["multiplecontent"]) {
            // line 34
            echo "                ";
            if ($context["multiplecontent"]) {
                // line 35
                echo "                    ";
                echo twig_include($this->env, $context, "@bolt/dashboard/_recently_edited.twig");
                echo "
                ";
            }
            // line 37
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['contenttype'], $context['multiplecontent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            ";
        // line 39
        echo $this->env->getExtension('Bolt')->widgets("dashboard_bottom", "backend");
        echo "

        </div>

        <aside class=\"col-md-4\">
            ";
        // line 44
        echo twig_include($this->env, $context, "@bolt/dashboard/_aside.twig");
        echo "
        </aside>

    </div>

";
        
        $__internal_b9a6ab3dd6ed5585e21fa20a78e55696cde3c6f7e91e502cf211d270bccd59f0->leave($__internal_b9a6ab3dd6ed5585e21fa20a78e55696cde3c6f7e91e502cf211d270bccd59f0_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 44,  168 => 39,  165 => 38,  151 => 37,  145 => 35,  142 => 34,  125 => 33,  121 => 31,  115 => 29,  109 => 27,  107 => 26,  101 => 23,  98 => 22,  92 => 20,  90 => 19,  85 => 17,  79 => 13,  73 => 12,  61 => 10,  49 => 7,  37 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Dashboard #}*/
/* */
/* {% extends '@bolt/_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Dashboard' %}*/
/* */
/* {% block page_title __('page.dashboard.title') %}*/
/* */
/* {# clear default messages, because we use them in a different spot, in this template #}*/
/* {% block messages "" %}*/
/* */
/* {% block page_main %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/* */
/*             {{ include('@bolt/_sub/_messages.twig') }}*/
/* */
/*             {% if context.suggestloripsum %}*/
/*                 {{ include('@bolt/dashboard/_suggestloripsum.twig') }}*/
/*             {% endif %}*/
/* */
/*             {{ widgets('dashboard_below_header', 'backend') }}*/
/* */
/*             <div class="quicklinks">*/
/*                 {% if app.config.get('contenttypes')|length() > 3 %}*/
/*                     {{ include('@bolt/dashboard/_quicklinks-dropdown.twig') }}*/
/*                 {% else %}*/
/*                     {{ include('@bolt/dashboard/_quicklinks-buttons.twig') }}*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             {% for contenttype, multiplecontent in context.latest %}*/
/*                 {% if multiplecontent %}*/
/*                     {{ include('@bolt/dashboard/_recently_edited.twig') }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/* */
/*             {{ widgets('dashboard_bottom', 'backend') }}*/
/* */
/*         </div>*/
/* */
/*         <aside class="col-md-4">*/
/*             {{ include('@bolt/dashboard/_aside.twig') }}*/
/*         </aside>*/
/* */
/*     </div>*/
/* */
/* {% endblock page_main %}*/
/* */
