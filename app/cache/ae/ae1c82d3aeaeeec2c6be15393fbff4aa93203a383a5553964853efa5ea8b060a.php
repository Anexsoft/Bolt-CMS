<?php

/* @bolt/components/panel-news.twig */
class __TwigTemplate_480cfc6959bf5db4a9fe7ca897cf7c29cd22544af834ba6decebfb18c31e5e1f extends Twig_Template
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
        $__internal_02d846062346ddf6b0096ce9617d988f96272b2fb6c6f46774b6f34dedb838bd = $this->env->getExtension("native_profiler");
        $__internal_02d846062346ddf6b0096ce9617d988f96272b2fb6c6f46774b6f34dedb838bd->enter($__internal_02d846062346ddf6b0096ce9617d988f96272b2fb6c6f46774b6f34dedb838bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-news.twig"));

        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["context"]) ? $context["context"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 6
            echo "    ";
            echo twig_include($this->env, $context, "@bolt/components/panel-news-item.twig");
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_02d846062346ddf6b0096ce9617d988f96272b2fb6c6f46774b6f34dedb838bd->leave($__internal_02d846062346ddf6b0096ce9617d988f96272b2fb6c6f46774b6f34dedb838bd_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  22 => 5,);
    }
}
/* {##*/
/*  # Sidebar-Panel: Displays the latest news on Bolt*/
/*  # (Usage Example: Dashboards sidebar)*/
/*  #}*/
/* {% for news in context %}*/
/*     {{ include('@bolt/components/panel-news-item.twig') }}*/
/* {% endfor %}*/
/* */
