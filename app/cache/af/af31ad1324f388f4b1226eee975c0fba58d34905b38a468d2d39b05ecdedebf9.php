<?php

/* @bolt/_buic/_listing.twig */
class __TwigTemplate_38643b2f6cc321cb87a2b1648dcf0c172eb4ed32ffee5d8462e9c950a7c01f7f extends Twig_Template
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
        $__internal_1edfca423b3e575b9c34f64063da0c181f9dc03626421d3e7dd5a57858650199 = $this->env->getExtension("native_profiler");
        $__internal_1edfca423b3e575b9c34f64063da0c181f9dc03626421d3e7dd5a57858650199->enter($__internal_1edfca423b3e575b9c34f64063da0c181f9dc03626421d3e7dd5a57858650199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_buic/_listing.twig"));

        
        $__internal_1edfca423b3e575b9c34f64063da0c181f9dc03626421d3e7dd5a57858650199->leave($__internal_1edfca423b3e575b9c34f64063da0c181f9dc03626421d3e7dd5a57858650199_prof);

    }

    // line 1
    public function getbuic_listing_slink($__id__ = null, $__text__ = null, $__paramname__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "text" => $__text__,
            "paramname" => $__paramname__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7640b34653990b4ce97bf5f7bac0c9472b671b38b1523254f6eec0e77414ea7c = $this->env->getExtension("native_profiler");
            $__internal_7640b34653990b4ce97bf5f7bac0c9472b671b38b1523254f6eec0e77414ea7c->enter($__internal_7640b34653990b4ce97bf5f7bac0c9472b671b38b1523254f6eec0e77414ea7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buic_listing_slink"));

            // line 2
            echo "    ";
            $context["paramname"] = ((array_key_exists("paramname", $context)) ? (_twig_default_filter((isset($context["paramname"]) ? $context["paramname"] : null), "order")) : ("order"));
            // line 3
            echo "
    ";
            // line 4
            $context["params"] = array();
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != (isset($context["paramname"]) ? $context["paramname"] : null))) {
                    // line 6
                    echo "        ";
                    $context["params"] = twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($context["key"] => $context["val"]));
                    // line 7
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "
    ";
            // line 9
            if (($this->env->getExtension('Bolt')->request((isset($context["paramname"]) ? $context["paramname"] : null)) == (isset($context["id"]) ? $context["id"] : null))) {
                // line 10
                echo "        ";
                $context["class"] = "order-asc";
                // line 11
                echo "        ";
                $context["params"] = twig_array_merge((isset($context["params"]) ? $context["params"] : null), array((isset($context["paramname"]) ? $context["paramname"] : null) => ("-" . (isset($context["id"]) ? $context["id"] : null))));
                // line 12
                echo "    ";
            } elseif (($this->env->getExtension('Bolt')->request((isset($context["paramname"]) ? $context["paramname"] : null)) == ("-" . (isset($context["id"]) ? $context["id"] : null)))) {
                // line 13
                echo "        ";
                $context["class"] = "order-desc";
                // line 14
                echo "    ";
            } else {
                // line 15
                echo "        ";
                $context["class"] = "order-none";
                // line 16
                echo "        ";
                $context["params"] = twig_array_merge((isset($context["params"]) ? $context["params"] : null), array((isset($context["paramname"]) ? $context["paramname"] : null) => (isset($context["id"]) ? $context["id"] : null)));
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, ("?" . twig_urlencode_filter((isset($context["params"]) ? $context["params"] : null))), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "</a>
";
            
            $__internal_7640b34653990b4ce97bf5f7bac0c9472b671b38b1523254f6eec0e77414ea7c->leave($__internal_7640b34653990b4ce97bf5f7bac0c9472b671b38b1523254f6eec0e77414ea7c_prof);

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
        return "@bolt/_buic/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  97 => 18,  94 => 17,  91 => 16,  88 => 15,  85 => 14,  82 => 13,  79 => 12,  76 => 11,  73 => 10,  71 => 9,  68 => 8,  61 => 7,  58 => 6,  52 => 5,  50 => 4,  47 => 3,  44 => 2,  27 => 1,);
    }
}
/* {% macro buic_listing_slink(id, text, paramname) %}*/
/*     {% set paramname = paramname|default('order') %}*/
/* */
/*     {% set params = {} %}*/
/*     {% for key, val in app.request.query.all if key != paramname %}*/
/*         {% set params = params|merge({(key): val}) %}*/
/*     {% endfor %}*/
/* */
/*     {% if request(paramname) == id %}*/
/*         {% set class = 'order-asc' %}*/
/*         {% set params = params|merge({(paramname): '-' ~ id}) %}*/
/*     {% elseif request(paramname) == '-' ~ id %}*/
/*         {% set class = 'order-desc' %}*/
/*     {% else %}*/
/*         {% set class = 'order-none' %}*/
/*         {% set params = params|merge({(paramname): id}) %}*/
/*     {% endif %}*/
/* */
/*     <a href="{{ '?' ~ params|url_encode }}" class="{{ class }}">{{ text }}</a>*/
/* {% endmacro %}*/
/* */
