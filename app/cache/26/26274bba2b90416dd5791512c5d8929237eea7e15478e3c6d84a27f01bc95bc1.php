<?php

/* @bolt/_buic/_moment.twig */
class __TwigTemplate_a3fe8eca13f483851487b10cbfee646444991acbc035e7923793ee0988a7d19f extends Twig_Template
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
        $__internal_0aec9a16280fda4f4acd687c8b03508f5d221ae3df4eb21930e39792b93ffdba = $this->env->getExtension("native_profiler");
        $__internal_0aec9a16280fda4f4acd687c8b03508f5d221ae3df4eb21930e39792b93ffdba->enter($__internal_0aec9a16280fda4f4acd687c8b03508f5d221ae3df4eb21930e39792b93ffdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_buic/_moment.twig"));

        
        $__internal_0aec9a16280fda4f4acd687c8b03508f5d221ae3df4eb21930e39792b93ffdba->leave($__internal_0aec9a16280fda4f4acd687c8b03508f5d221ae3df4eb21930e39792b93ffdba_prof);

    }

    // line 6
    public function getbuic_moment($__datetime__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "datetime" => $__datetime__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_28fac8c888bea2cac55ffb7fbabbbc4c10add824b8e5213624ca5a4686aec352 = $this->env->getExtension("native_profiler");
            $__internal_28fac8c888bea2cac55ffb7fbabbbc4c10add824b8e5213624ca5a4686aec352->enter($__internal_28fac8c888bea2cac55ffb7fbabbbc4c10add824b8e5213624ca5a4686aec352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buic_moment"));

            // line 7
            $context["dt"] = twig_date_format_filter($this->env, (isset($context["datetime"]) ? $context["datetime"] : null), "Y-m-d\\TH:i:sP");
            // line 8
            echo "<time class=\"buic-moment\" data-bolt-widget=\"buicMoment\" datetime=\"";
            echo twig_escape_filter($this->env, (isset($context["dt"]) ? $context["dt"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["dt"]) ? $context["dt"] : null), "html", null, true);
            echo "</time>";
            
            $__internal_28fac8c888bea2cac55ffb7fbabbbc4c10add824b8e5213624ca5a4686aec352->leave($__internal_28fac8c888bea2cac55ffb7fbabbbc4c10add824b8e5213624ca5a4686aec352_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_buic/_moment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  42 => 7,  27 => 6,);
    }
}
/* {##*/
/*  # Renders a datetime that displays relative time.*/
/*  #*/
/*  # @param string datetime ISO-datetime ('Y-m-d H:i:s') to display.*/
/*  #}*/
/* {% macro buic_moment(datetime) -%}*/
/*     {%- set dt = datetime|date('Y-m-d\\TH:i:sP') -%}*/
/*     <time class="buic-moment" data-bolt-widget="buicMoment" datetime="{{ dt }}">{{ dt }}</time>*/
/* {%- endmacro %}*/
/* */
