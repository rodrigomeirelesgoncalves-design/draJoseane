import { useState } from 'react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Textarea } from '@/components/ui/textarea';
import { MessageCircle, Mail, MapPin, Send } from 'lucide-react';
import { useToast } from '@/hooks/use-toast';

const Contact = () => {
  const { toast } = useToast();
  const [formData, setFormData] = useState({
    name: '',
    phone: '',
    email: '',
    message: '',
  });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    toast({
      title: 'Mensagem enviada!',
      description: 'Em breve entraremos em contato.',
    });
    setFormData({ name: '', phone: '', email: '', message: '' });
  };

  const contactInfo = [
    {
      icon: MessageCircle,
      label: 'WhatsApp',
      value: '(66) 99934-0517',
      href: 'https://wa.me/5566999340517',
    },
    {
      icon: Mail,
      label: 'E-mail',
      value: 'contato@drajoseanesouza.com.br',
      href: 'mailto:contato@drajoseanesouza.com.br',
    },
    {
      icon: MapPin,
      label: 'Localização',
      value: 'Sorriso - MT (Atendimento Online)',
      href: '#',
    },
  ];

  return (
    <section id="contato" className="section-padding bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-12">
          <span className="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
            Contato
          </span>
          <h2 className="font-serif text-3xl md:text-4xl font-bold text-foreground mb-4">
            Vamos conversar?
          </h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">
            Dê o primeiro passo para sua transformação. Entre em contato e agende sua consulta.
          </p>
        </div>
        
        <div className="grid lg:grid-cols-2 gap-12 max-w-5xl mx-auto">
          {/* Contact Info */}
          <div className="space-y-8">
            <div>
              <h3 className="font-serif text-xl font-semibold text-foreground mb-6">
                Informações de Contato
              </h3>
              <div className="space-y-4">
                {contactInfo.map((item, index) => (
                  <a
                    key={index}
                    href={item.href}
                    target={item.href.startsWith('http') ? '_blank' : undefined}
                    rel={item.href.startsWith('http') ? 'noopener noreferrer' : undefined}
                    className="flex items-center gap-4 p-4 bg-card rounded-xl border border-border hover:border-primary/30 transition-colors group"
                  >
                    <div className="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <item.icon size={24} className="text-primary" />
                    </div>
                    <div>
                      <p className="text-sm text-muted-foreground">{item.label}</p>
                      <p className="font-medium text-foreground">{item.value}</p>
                    </div>
                  </a>
                ))}
              </div>
            </div>
            
            <div className="bg-primary/10 p-6 rounded-xl">
              <h4 className="font-serif text-lg font-semibold text-foreground mb-3">
                Prefere o WhatsApp?
              </h4>
              <p className="text-muted-foreground mb-4">
                Clique abaixo para iniciar uma conversa diretamente.
              </p>
              <Button asChild className="w-full bg-primary hover:bg-primary/90 text-primary-foreground">
                <a
                  href="https://wa.me/5566999340517?text=Olá!%20Gostaria%20de%20agendar%20uma%20consulta."
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <MessageCircle size={20} className="mr-2" />
                  Chamar no WhatsApp
                </a>
              </Button>
            </div>
          </div>
          
          {/* Contact Form */}
          <div className="bg-card p-8 rounded-xl shadow-sm border border-border">
            <h3 className="font-serif text-xl font-semibold text-foreground mb-6">
              Envie uma Mensagem
            </h3>
            
            <form onSubmit={handleSubmit} className="space-y-4">
              <div>
                <label className="block text-sm font-medium text-foreground mb-2">Nome</label>
                <Input
                  type="text"
                  value={formData.name}
                  onChange={(e) => setFormData({ ...formData, name: e.target.value })}
                  placeholder="Seu nome completo"
                  required
                />
              </div>
              
              <div>
                <label className="block text-sm font-medium text-foreground mb-2">Telefone</label>
                <Input
                  type="tel"
                  value={formData.phone}
                  onChange={(e) => setFormData({ ...formData, phone: e.target.value })}
                  placeholder="(00) 00000-0000"
                  required
                />
              </div>
              
              <div>
                <label className="block text-sm font-medium text-foreground mb-2">E-mail</label>
                <Input
                  type="email"
                  value={formData.email}
                  onChange={(e) => setFormData({ ...formData, email: e.target.value })}
                  placeholder="seu@email.com"
                  required
                />
              </div>
              
              <div>
                <label className="block text-sm font-medium text-foreground mb-2">Mensagem</label>
                <Textarea
                  value={formData.message}
                  onChange={(e) => setFormData({ ...formData, message: e.target.value })}
                  placeholder="Como posso ajudar você?"
                  rows={4}
                  required
                />
              </div>
              
              <Button type="submit" className="w-full bg-primary hover:bg-primary/90 text-primary-foreground">
                <Send size={18} className="mr-2" />
                Enviar Mensagem
              </Button>
              
              <p className="text-xs text-muted-foreground text-center mt-4">
                Suas informações são tratadas com total sigilo e segurança.
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;
