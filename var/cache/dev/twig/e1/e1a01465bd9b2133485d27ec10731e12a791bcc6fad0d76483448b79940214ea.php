<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b9d1b17705ac9e4847598e11da598c5bc6bfce97b7e4a4d98c2cf4c2d18c8b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0da5ec004284303c43a11387e3d7c4d08bc892e891b1054674e9e059b4b3a597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da5ec004284303c43a11387e3d7c4d08bc892e891b1054674e9e059b4b3a597->enter($__internal_0da5ec004284303c43a11387e3d7c4d08bc892e891b1054674e9e059b4b3a597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ee1f471bfff1dc914e86e28572cb0647da48ced3aa0fab0670b514b706a484b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1f471bfff1dc914e86e28572cb0647da48ced3aa0fab0670b514b706a484b9->enter($__internal_ee1f471bfff1dc914e86e28572cb0647da48ced3aa0fab0670b514b706a484b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da5ec004284303c43a11387e3d7c4d08bc892e891b1054674e9e059b4b3a597->leave($__internal_0da5ec004284303c43a11387e3d7c4d08bc892e891b1054674e9e059b4b3a597_prof);

        
        $__internal_ee1f471bfff1dc914e86e28572cb0647da48ced3aa0fab0670b514b706a484b9->leave($__internal_ee1f471bfff1dc914e86e28572cb0647da48ced3aa0fab0670b514b706a484b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e7bbe8db641e11e7a4d7199dee58b397af90a9d23255745ff8a038746cd47d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7bbe8db641e11e7a4d7199dee58b397af90a9d23255745ff8a038746cd47d6->enter($__internal_9e7bbe8db641e11e7a4d7199dee58b397af90a9d23255745ff8a038746cd47d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee4ce4da63c38edfd1ed8e0a2480da511c549ee1906b21fba84c7b2873a62b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4ce4da63c38edfd1ed8e0a2480da511c549ee1906b21fba84c7b2873a62b93->enter($__internal_ee4ce4da63c38edfd1ed8e0a2480da511c549ee1906b21fba84c7b2873a62b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ee4ce4da63c38edfd1ed8e0a2480da511c549ee1906b21fba84c7b2873a62b93->leave($__internal_ee4ce4da63c38edfd1ed8e0a2480da511c549ee1906b21fba84c7b2873a62b93_prof);

        
        $__internal_9e7bbe8db641e11e7a4d7199dee58b397af90a9d23255745ff8a038746cd47d6->leave($__internal_9e7bbe8db641e11e7a4d7199dee58b397af90a9d23255745ff8a038746cd47d6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2aa624689dce91d54706c61084735b4fbb887f85c1e618d5aec408f3683722c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa624689dce91d54706c61084735b4fbb887f85c1e618d5aec408f3683722c5->enter($__internal_2aa624689dce91d54706c61084735b4fbb887f85c1e618d5aec408f3683722c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ffa1f92c3d85c083bedb54ec7c1e171bb45149b846c42d8397b9a1fc85b5c27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa1f92c3d85c083bedb54ec7c1e171bb45149b846c42d8397b9a1fc85b5c27a->enter($__internal_ffa1f92c3d85c083bedb54ec7c1e171bb45149b846c42d8397b9a1fc85b5c27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ffa1f92c3d85c083bedb54ec7c1e171bb45149b846c42d8397b9a1fc85b5c27a->leave($__internal_ffa1f92c3d85c083bedb54ec7c1e171bb45149b846c42d8397b9a1fc85b5c27a_prof);

        
        $__internal_2aa624689dce91d54706c61084735b4fbb887f85c1e618d5aec408f3683722c5->leave($__internal_2aa624689dce91d54706c61084735b4fbb887f85c1e618d5aec408f3683722c5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb81abffb43a1d58217f0a726236aa23c3d647430d754faf8f103b62b6a068c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb81abffb43a1d58217f0a726236aa23c3d647430d754faf8f103b62b6a068c2->enter($__internal_cb81abffb43a1d58217f0a726236aa23c3d647430d754faf8f103b62b6a068c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25192e49bde3335b115be33dff7d99a8d5d2bcf17ae446f787148eea4ce202ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25192e49bde3335b115be33dff7d99a8d5d2bcf17ae446f787148eea4ce202ad->enter($__internal_25192e49bde3335b115be33dff7d99a8d5d2bcf17ae446f787148eea4ce202ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_25192e49bde3335b115be33dff7d99a8d5d2bcf17ae446f787148eea4ce202ad->leave($__internal_25192e49bde3335b115be33dff7d99a8d5d2bcf17ae446f787148eea4ce202ad_prof);

        
        $__internal_cb81abffb43a1d58217f0a726236aa23c3d647430d754faf8f103b62b6a068c2->leave($__internal_cb81abffb43a1d58217f0a726236aa23c3d647430d754faf8f103b62b6a068c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/freshblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
