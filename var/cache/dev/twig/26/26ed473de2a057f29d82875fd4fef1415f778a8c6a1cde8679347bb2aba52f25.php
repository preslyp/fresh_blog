<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_31ff3c1b2e2edcaf99b2a303b9b612911cca62687dbefadf32b382450409afd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9092ce9af0fb2a28e8398db081ae0935e74baed0eaa253b7723ef032e88df194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9092ce9af0fb2a28e8398db081ae0935e74baed0eaa253b7723ef032e88df194->enter($__internal_9092ce9af0fb2a28e8398db081ae0935e74baed0eaa253b7723ef032e88df194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_19ca975229932d6e5c95bf46b7b271d5f052518f0981fdc4512d4092f8883f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ca975229932d6e5c95bf46b7b271d5f052518f0981fdc4512d4092f8883f24->enter($__internal_19ca975229932d6e5c95bf46b7b271d5f052518f0981fdc4512d4092f8883f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9092ce9af0fb2a28e8398db081ae0935e74baed0eaa253b7723ef032e88df194->leave($__internal_9092ce9af0fb2a28e8398db081ae0935e74baed0eaa253b7723ef032e88df194_prof);

        
        $__internal_19ca975229932d6e5c95bf46b7b271d5f052518f0981fdc4512d4092f8883f24->leave($__internal_19ca975229932d6e5c95bf46b7b271d5f052518f0981fdc4512d4092f8883f24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc8214071c1dc91a3496f3b8e50fc0c4328c50993f92bc9c66d333b250f0c85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8214071c1dc91a3496f3b8e50fc0c4328c50993f92bc9c66d333b250f0c85d->enter($__internal_bc8214071c1dc91a3496f3b8e50fc0c4328c50993f92bc9c66d333b250f0c85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f26b11ae0009e0813dbc4d4e93a86af833001c1ecdcdc2652ff66246975e06b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26b11ae0009e0813dbc4d4e93a86af833001c1ecdcdc2652ff66246975e06b3->enter($__internal_f26b11ae0009e0813dbc4d4e93a86af833001c1ecdcdc2652ff66246975e06b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f26b11ae0009e0813dbc4d4e93a86af833001c1ecdcdc2652ff66246975e06b3->leave($__internal_f26b11ae0009e0813dbc4d4e93a86af833001c1ecdcdc2652ff66246975e06b3_prof);

        
        $__internal_bc8214071c1dc91a3496f3b8e50fc0c4328c50993f92bc9c66d333b250f0c85d->leave($__internal_bc8214071c1dc91a3496f3b8e50fc0c4328c50993f92bc9c66d333b250f0c85d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/freshblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
