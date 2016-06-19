<?php

/* @bolt/dbcheck/_macros.twig */
class __TwigTemplate_4aa92371b6ec8db37fa9cf103a68815d5c37dc52633bea7d428594b183352690 extends Twig_Template
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
        $__internal_cc79e06db1cc44bd16e735cc58588bb73ee6136be91b32122ac1b5505dc450b6 = $this->env->getExtension("native_profiler");
        $__internal_cc79e06db1cc44bd16e735cc58588bb73ee6136be91b32122ac1b5505dc450b6->enter($__internal_cc79e06db1cc44bd16e735cc58588bb73ee6136be91b32122ac1b5505dc450b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dbcheck/_macros.twig"));

        
        $__internal_cc79e06db1cc44bd16e735cc58588bb73ee6136be91b32122ac1b5505dc450b6->leave($__internal_cc79e06db1cc44bd16e735cc58588bb73ee6136be91b32122ac1b5505dc450b6_prof);

    }

    // line 1
    public function getlist($__headline__ = null, $__list__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "headline" => $__headline__,
            "list" => $__list__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_390f29bc73c07192303c156fd10879821f35aa1530745084ad7c38fff1370665 = $this->env->getExtension("native_profiler");
            $__internal_390f29bc73c07192303c156fd10879821f35aa1530745084ad7c38fff1370665->enter($__internal_390f29bc73c07192303c156fd10879821f35aa1530745084ad7c38fff1370665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "list"));

            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null)) > 0)) {
                // line 3
                echo "        <h4>";
                echo twig_escape_filter($this->env, (isset($context["headline"]) ? $context["headline"] : null), "html", null, true);
                echo "</h4>

        <ul>
            ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 7
                    echo "                <li>";
                    echo $this->env->getExtension('Bolt')->decorateTT($context["item"]);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "        </ul>
    ";
            }
            
            $__internal_390f29bc73c07192303c156fd10879821f35aa1530745084ad7c38fff1370665->leave($__internal_390f29bc73c07192303c156fd10879821f35aa1530745084ad7c38fff1370665_prof);

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
        return "@bolt/dbcheck/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  57 => 7,  53 => 6,  46 => 3,  43 => 2,  27 => 1,);
    }
}
/* {% macro list(headline, list) %}*/
/*     {% if list|length > 0 %}*/
/*         <h4>{{ headline }}</h4>*/
/* */
/*         <ul>*/
/*             {% for item in list %}*/
/*                 <li>{{ item|tt }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
