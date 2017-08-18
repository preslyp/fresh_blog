<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_38b0009d303d9f07921b8814c4390e4ea9779a7ddc00e68eabb465fea3f9721c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b0009d303d9f07921b8814c4390e4ea9779a7ddc00e68eabb465fea3f9721c->enter($__internal_38b0009d303d9f07921b8814c4390e4ea9779a7ddc00e68eabb465fea3f9721c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_05c5c20963043a7bc1f80f05da4cc2cfbe0e6f9eb0990f7c39483906482a6ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c5c20963043a7bc1f80f05da4cc2cfbe0e6f9eb0990f7c39483906482a6ef1->enter($__internal_05c5c20963043a7bc1f80f05da4cc2cfbe0e6f9eb0990f7c39483906482a6ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b0009d303d9f07921b8814c4390e4ea9779a7ddc00e68eabb465fea3f9721c->leave($__internal_38b0009d303d9f07921b8814c4390e4ea9779a7ddc00e68eabb465fea3f9721c_prof);

        
        $__internal_05c5c20963043a7bc1f80f05da4cc2cfbe0e6f9eb0990f7c39483906482a6ef1->leave($__internal_05c5c20963043a7bc1f80f05da4cc2cfbe0e6f9eb0990f7c39483906482a6ef1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b4b44e7e1155f095e31673794e338be640d414507bd72d459cfb840904c8295d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b44e7e1155f095e31673794e338be640d414507bd72d459cfb840904c8295d->enter($__internal_b4b44e7e1155f095e31673794e338be640d414507bd72d459cfb840904c8295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f5739350152684617ca5249c25dfd16dbd35b01017b66caf8da62c65c99fc05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5739350152684617ca5249c25dfd16dbd35b01017b66caf8da62c65c99fc05e->enter($__internal_f5739350152684617ca5249c25dfd16dbd35b01017b66caf8da62c65c99fc05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5739350152684617ca5249c25dfd16dbd35b01017b66caf8da62c65c99fc05e->leave($__internal_f5739350152684617ca5249c25dfd16dbd35b01017b66caf8da62c65c99fc05e_prof);

        
        $__internal_b4b44e7e1155f095e31673794e338be640d414507bd72d459cfb840904c8295d->leave($__internal_b4b44e7e1155f095e31673794e338be640d414507bd72d459cfb840904c8295d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3fa2042b802247706a7cd6241874beb6be03f7104a49831d2491573823427189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa2042b802247706a7cd6241874beb6be03f7104a49831d2491573823427189->enter($__internal_3fa2042b802247706a7cd6241874beb6be03f7104a49831d2491573823427189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a40b658e9ed6e1a5d4bc4fd64746e94efe0811095e4e8b5e141f7523e8970d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a40b658e9ed6e1a5d4bc4fd64746e94efe0811095e4e8b5e141f7523e8970d6->enter($__internal_1a40b658e9ed6e1a5d4bc4fd64746e94efe0811095e4e8b5e141f7523e8970d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a40b658e9ed6e1a5d4bc4fd64746e94efe0811095e4e8b5e141f7523e8970d6->leave($__internal_1a40b658e9ed6e1a5d4bc4fd64746e94efe0811095e4e8b5e141f7523e8970d6_prof);

        
        $__internal_3fa2042b802247706a7cd6241874beb6be03f7104a49831d2491573823427189->leave($__internal_3fa2042b802247706a7cd6241874beb6be03f7104a49831d2491573823427189_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27290479bb93e308b53c0c40351b82d43b84a1e7ce876c78b4f460271230ed9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27290479bb93e308b53c0c40351b82d43b84a1e7ce876c78b4f460271230ed9d->enter($__internal_27290479bb93e308b53c0c40351b82d43b84a1e7ce876c78b4f460271230ed9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b9b7b795a467d9e0d139e09bfb1ddd94371f16ed93ef5b3683260dd7bf845d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b7b795a467d9e0d139e09bfb1ddd94371f16ed93ef5b3683260dd7bf845d0d->enter($__internal_b9b7b795a467d9e0d139e09bfb1ddd94371f16ed93ef5b3683260dd7bf845d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b9b7b795a467d9e0d139e09bfb1ddd94371f16ed93ef5b3683260dd7bf845d0d->leave($__internal_b9b7b795a467d9e0d139e09bfb1ddd94371f16ed93ef5b3683260dd7bf845d0d_prof);

        
        $__internal_27290479bb93e308b53c0c40351b82d43b84a1e7ce876c78b4f460271230ed9d->leave($__internal_27290479bb93e308b53c0c40351b82d43b84a1e7ce876c78b4f460271230ed9d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/freshblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
