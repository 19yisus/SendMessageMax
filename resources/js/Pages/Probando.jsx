import Button from '@/Components/Button';
import Input from '@/Components/Input';
import Label from '@/Components/Label';
import Guest from '@/Layouts/Guest';
import { useForm, head, Head } from '@inertiajs/inertia-react';
import React from 'react';

const Probando = ()=>{
  const {data, setData, post, processing, errors, reset } = useForm({
    title:'',
    body:''
  });

  const submit = (e) => {
    e.preventDefault();
    post(route("Probando.store"), {onSuccess: (e) =>{
      console.log(e)
      reset()
    }})
  }

  return(
    <Guest>
      <Head title="Probando"/>
      <div className="mx-auto p-4 max-w-2xl">
        <form onSubmit={submit}>
          <Label value="Titulo" />
          <Input name="title" value={data.title} handleChange={e => setData('title',e.target.value)}/>
          <Button className='my-2' processing={processing}>Registrar</Button>
        </form>
      </div>
    </Guest>
  );
}

export default Probando;