<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ead3508d1daa9a2298b20fa76f727dfc87aa20954c62f25a3946d24a56c0c2a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98790f092ecc4fc61a18d9ad4d56ec37a766175724d9c7e672b080b29c823c68 = $this->env->getExtension("native_profiler");
        $__internal_98790f092ecc4fc61a18d9ad4d56ec37a766175724d9c7e672b080b29c823c68->enter($__internal_98790f092ecc4fc61a18d9ad4d56ec37a766175724d9c7e672b080b29c823c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98790f092ecc4fc61a18d9ad4d56ec37a766175724d9c7e672b080b29c823c68->leave($__internal_98790f092ecc4fc61a18d9ad4d56ec37a766175724d9c7e672b080b29c823c68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9984edb1782935586a94d8ca6318cf5f60d60b65deac81543d50df076cae20e4 = $this->env->getExtension("native_profiler");
        $__internal_9984edb1782935586a94d8ca6318cf5f60d60b65deac81543d50df076cae20e4->enter($__internal_9984edb1782935586a94d8ca6318cf5f60d60b65deac81543d50df076cae20e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9984edb1782935586a94d8ca6318cf5f60d60b65deac81543d50df076cae20e4->leave($__internal_9984edb1782935586a94d8ca6318cf5f60d60b65deac81543d50df076cae20e4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e3e1b1ede3d7dbc0eda1d0fa4d8b98b0f25b0a5a0255cc43c6e5ab60b0709e8 = $this->env->getExtension("native_profiler");
        $__internal_2e3e1b1ede3d7dbc0eda1d0fa4d8b98b0f25b0a5a0255cc43c6e5ab60b0709e8->enter($__internal_2e3e1b1ede3d7dbc0eda1d0fa4d8b98b0f25b0a5a0255cc43c6e5ab60b0709e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2e3e1b1ede3d7dbc0eda1d0fa4d8b98b0f25b0a5a0255cc43c6e5ab60b0709e8->leave($__internal_2e3e1b1ede3d7dbc0eda1d0fa4d8b98b0f25b0a5a0255cc43c6e5ab60b0709e8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfb72ccb21b7f2a6217964eda63d9d94354201dd99303336b146b2bd3174271c = $this->env->getExtension("native_profiler");
        $__internal_cfb72ccb21b7f2a6217964eda63d9d94354201dd99303336b146b2bd3174271c->enter($__internal_cfb72ccb21b7f2a6217964eda63d9d94354201dd99303336b146b2bd3174271c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </div>
    ";
        }
        
        $__internal_cfb72ccb21b7f2a6217964eda63d9d94354201dd99303336b146b2bd3174271c->leave($__internal_cfb72ccb21b7f2a6217964eda63d9d94354201dd99303336b146b2bd3174271c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
