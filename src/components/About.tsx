import { Brain, Heart, BookOpen, User } from 'lucide-react';
import draJoseane from '@/assets/dra-joseane.png';

const About = () => {
  const stats = [
    { value: '100%', label: 'Online' },
    { value: '+500', label: 'Pacientes' },
    { value: '5★', label: 'Avaliação' },
  ];

  const features = [
    { icon: Brain, title: 'Neuropsicoterapeuta', description: 'Especialização em neurociência aplicada' },
    { icon: Heart, title: 'Abordagem Humanizada', description: 'Escuta acolhedora e ética' },
    { icon: BookOpen, title: 'Atualização Constante', description: 'Técnicas terapêuticas modernas' },
    { icon: User, title: 'Experiência', description: 'Anos de dedicação à saúde mental' },
  ];

  return (
    <section id="sobre" className="section-padding bg-background">
      <div className="container mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Image with feature cards */}
          <div className="relative">
            <div className="relative bg-gradient-to-br from-sage to-teal-light rounded-2xl p-6 pb-24">
              <img
                src={draJoseane}
                alt="Joseane Souza - Neuropsicoterapeuta"
                className="relative z-10 rounded-xl w-full max-w-sm mx-auto object-cover"
              />
            </div>
            
            {/* Feature cards grid */}
            <div className="absolute bottom-0 left-4 right-4 grid grid-cols-2 gap-3 translate-y-1/2">
              {features.map((feature, index) => (
                <div key={index} className="bg-white p-4 rounded-xl shadow-md border border-border">
                  <feature.icon size={20} className="text-primary mb-2" />
                  <h4 className="font-semibold text-sm text-foreground">{feature.title}</h4>
                  <p className="text-xs text-muted-foreground">{feature.description}</p>
                </div>
              ))}
            </div>
          </div>
          
          {/* Content */}
          <div className="lg:pl-8 mt-24 lg:mt-0">
            <span className="inline-block px-4 py-2 bg-primary text-primary-foreground rounded-full text-sm font-medium mb-4">
              Sobre Mim
            </span>
            
            <h2 className="font-serif text-3xl md:text-4xl font-bold text-foreground mb-6">
              Ajudo você a retomar o{' '}
              <span className="text-primary">controle</span> da sua vida
            </h2>
            
            <div className="space-y-4 text-muted-foreground">
              <p>
                Sou Neuropsicoterapeuta especializada em ansiedade e traumas emocionais, com atendimento online para adultos em Sorriso – MT e todo o Brasil.
              </p>
              <p>
                Ajudo pessoas que sofrem com <strong className="text-foreground">ansiedade, crises emocionais, medos, insegurança, sobrecarga mental</strong> e impactos de experiências traumáticas a retomarem o equilíbrio emocional e o controle da própria vida.
              </p>
              <p>
                Meu trabalho é baseado na <strong className="text-foreground">neurociência aplicada à psicoterapia</strong>, integrando técnicas terapêuticas eficazes com uma escuta acolhedora, ética e personalizada, respeitando o ritmo, a história e o corpo de cada paciente.
              </p>
            </div>
            
            {/* Stats */}
            <div className="grid grid-cols-3 gap-6 mt-8 pt-8 border-t border-border">
              {stats.map((stat, index) => (
                <div key={index} className="text-center">
                  <p className="font-serif text-3xl font-bold text-primary">{stat.value}</p>
                  <p className="text-sm text-muted-foreground mt-1">{stat.label}</p>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;
